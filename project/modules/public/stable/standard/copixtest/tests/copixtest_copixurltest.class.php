<?php
/**
* @package		standard
* @subpackage	copixtest
* @author		Croës Gérald
* @copyright	CopixTeam
* @link			http://copix.org
* @license		http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

/**
 * Test de la classes CopixUrl
 * @package		standard
 * @subpackage	copixtest
 */
class CopixTest_CopixUrlTest extends CopixTest {
	function testValues () {
		CopixConfig::instance ()->url_requestedscript_variable = 'PHP_SELF'; 
		// Verifions que l'on retourne le bon hote
		$this->assertEquals ($_SERVER ['HTTP_HOST'], CopixUrl::getRequestedDomain());
		$this->assertRegexp ('/^\/.*test\.php$/', CopixUrl::getRequestedScript());
		$this->assertEquals ('test.php', CopixUrl::getRequestedScriptName ());		
		$this->assertEquals ( 'http://', CopixUrl::getRequestedProtocol()); 				
		$currentUrl = CopixUrl::getCurrentUrl ();
	}
	
	function testConstructUrl () {
		$baseUrl = "test.php?var=value";
		
		// Tests de construction d'une url en mode default
		CopixConfig::instance ()->significant_url_mode = 'default';
		$this->assertEquals ("test.php?var=value", CopixUrl::appendToUrl ($baseUrl));
		$this->assertEquals ("test.php?var=value2", CopixUrl::appendToUrl ($baseUrl, array ('var'=>'value2')));
		$this->assertEquals ("test.php?var=value&var1=value1", CopixUrl::appendToUrl ($baseUrl, array ('var1'=>'value1')));
		
		// Test de construction d'une URL en mode prepend
		CopixConfig::instance ()->significant_url_mode = 'prepend';
		$baseUrl = "test.php?var=value";
		$this->assertEquals("test.php?var=value",CopixUrl::appendToUrl($baseUrl));
	}
	
	function testGet () {
		// Test si on récupère une adresse par défault
		$this->assertRegexp ('/^http:\/\/.*www\/$/', CopixUrl::get());
		$this->assertRegexp ('/^http:\/\/.*www/', CopixUrl::get("#"));
		
		// Test des URL récupérées en mode prepend
		CopixConfig::instance ()->significant_url_mode = 'prepend';
		
		// On attend ici une URL en utilisant tous les cas du paramètre $pDest
		// @todo : Changer le test quand on voudra enlever le deuxième default
		$this->assertRegexp ('/^http:\/\/.*\/default\/default\/copixtest/', _url('copixtest'));
		$params = new StdClass ();
		$this->assertRegexp ('/^http:\/\/.*\/default\/default\/copixtest/', _url('copixtest', $params));
		
		$this->assertRegexp ('/^http:\/\/.*\/default\/copixtest/', _url('copixtest|'));		
		$this->assertRegexp ('/^http:\/\/.*\/copixtest/', _url('copixtest||'));
		// On cherche l'URL d'un module avec une variable définie dans une fichier significanturl		
		$this->assertRegexp ('/^http:\/\/.*?test=value$/', _url('copixtest||',array('test'=>'value')));
		$params = new StdClass ();
		$params->test = 'value';
		$this->assertRegexp ('/^http:\/\/.*?test=value$/', _url('copixtest||', $params));

		// On cherche l'URL d'un module avec une variable non définie dans une fichier significanturl
		$this->assertRegexp ('/^http:\/\/.*\/value$/', _url('copixtest||',array('var'=>'value')));
		// On cherche l'URL d'un module inexistant dans le site
		// @todo : Changer le test quand on voudra enlever le deuxième default 
		$this->assertRegexp ('/^http:\/\/.*\/test$/', _url('test||'));
		
		// Test des URL récupérées en mode default
		CopixConfig::instance ()->significant_url_mode = 'default';

		// On cherche l'URL d'un module avec une variable définie dans une fichier significanturl
		$this->assertRegexp ('/^http:\/\/.*\?module=copixtest.*&test=value$/', _url('copixtest||', array('test'=>'value')));
		
		// On cherche l'URL d'un module avec une variable non définie dans une fichier significanturl
		$this->assertRegexp ('/^http:\/\/.*\?module=copixtest.*&var=value$/', _url('copixtest||', array('var'=>'value')));

		// On cherche l'URL d'un module inexistant dans le site
		$this->assertRegexp ('/^http:\/\/.*\?module=test/', _url('test||'));
		
		$this->assertEquals ('http://www.google.fr', _url ('copixtest|google|'));
	}
	
	function testParse () {
		$testUrl = "test.php?var=value";
		CopixConfig::instance ()->significant_url_mode = 'default';
		$this->assertContains ("value",CopixUrl::parse ($testUrl, true));
		CopixConfig::instance ()->significant_url_mode = 'prepend';
		$this->assertContains ("value", CopixUrl::parse ($testUrl, true));
	}
	
	function testValueToUrl (){
		$this->assertEquals (CopixUrl::valueToUrl ('test', array (1, 2, 3, 4)), 'test[0]=1&test[1]=2&test[2]=3&test[3]=4');
		$this->assertEquals (CopixUrl::valueToUrl (null, array ('test'=>array (1, 2, 3, 4))), 'test[0]=1&test[1]=2&test[2]=3&test[3]=4');
		$this->assertEquals (CopixUrl::valueToUrl ('test', array (1, 2, 3, 4), true), '&test[0]=1&test[1]=2&test[2]=3&test[3]=4');
		$this->assertEquals (CopixUrl::valueToUrl (null, array ('test'=>array (1, 2, 3, 4)), true), '&test[0]=1&test[1]=2&test[2]=3&test[3]=4');
		$this->assertEquals (CopixUrl::valueToUrl ('test', array (1, 2, 3, 4), true, true), '&amp;test[0]=1&amp;test[1]=2&amp;test[2]=3&amp;test[3]=4');
		$this->assertEquals (CopixUrl::valueToUrl (null, array ('test'=>array (1, 2, 3, 4)),true, true), '&amp;test[0]=1&amp;test[1]=2&amp;test[2]=3&amp;test[3]=4');
	}
}
?>