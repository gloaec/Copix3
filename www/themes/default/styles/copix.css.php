<?php       
    header("Content-type: text/css; charset: UTF-8");
    header("Cache-Control: must-revalidate");
    $offset = 60 * 60 ;
    $ExpStr = "Expires: " .
    gmdate("D, d M Y H:i:s",
    time() + $offset) . " GMT";
    header($ExpStr);

    //some defines
  	$softgrey='#4b4d46';
  	$hardgrey='#868e74';
  	$importantcolor= "#AA2314";
  	$titlecolor = "#b60000";
  	$contentwidth = "75%";
  	$root = $_GET['copixurl'];
?>
@CHARSET "UTF-8";

.errorMessage {
   border: 2px solid #aa0000;
   margin: 5px;
   padding: 5px;
   text-align: center;
}
.errorMessage h1 {
   background-color: #792206;
   background-image:url('../img/titre_rouge.gif');
   background-repeat:no-repeat;
   background-position: top right;
   color: #ffffff;
   text-align: center;
   font-size: 1em;
   margin-top: 0;
   padding: 3px;
}

.CopixTable {
   margin-left: 5px;
   width: 98%;
  
   border:3px solid #4b4d46;
   border-collapse:collapse;
}
.CopixVerticalTable {
   margin-left: 5px;
   width: 98%;
   border:3px solid #4b4d46;
   border-collapse:collapse;
}

.CopixVerticalTable th {
   text-align: left;
   background-color: #4b4d46;
   color: #ffffff;
   border: 1px solid #ffffff;
}

.CopixVerticalTable tr:hover {
   background-color:#C6CeB4;
}

.CopixTable tr:hover {
   background-color:#C6CeB4;
}

.CopixTable thead {
    background-color:#4b4d46;
}

.CopixTable thead th {
   background-color:transparent;
   text-align: left;
}

.CopixTable tr th {
   text-align: left;
   background-color:#4b4d46;
   height:25px;
   color: #ffffff;
}

.CopixTable td {
   height:25px;
}

.CopixTable th a,.CopixTable th a:visited {
   color: #ffffff;
   text-decoration: none;   
}

.alternate {
   background-color: #dbdfc9;
}

/** Mootools **/
.resizable{
	padding-bottom: 24px;
	padding-right: 20px;
	background-image: url('../img/modules/wiki/resize.png');
	background-position: bottom right;
	background-repeat: no-repeat;
}

.moocolumn {
	padding-right : 4px;
}

.moocolumn2 {
	padding-left : 4px;
	border-left : 1px dotted #AEAEAE;
}

/* CopixForms */
.copixforms_error {
	color:red;
}

/* AutoCompleter */
div.autocompleter-loading {
	float:					left;
	clear:					right;
	background:				#fff url('../images/spinner.gif') no-repeat center;
	width:					50px;
	height:					16px;
}

ul.autocompleter-choices {
	position:				absolute;
	margin:					0;
	padding:				0;
	list-style:				none;
	border:					1px solid #eee;
	background-color:		white;
	border-right-color:		#ddd;
	border-bottom-color:	#ddd;
	text-align:				left;
	font-family:			Verdana, Geneva, Arial, Helvetica, sans-serif;
	z-index:				50;
	overflow:auto;
	height:150px;
}

ul.autocompleter-choices li {
	position:				relative;
	padding:				0.1em 1.5em 0.1em 1em;
	cursor:					pointer;
	font-weight:			normal;
	font-size:				1em;
}

ul.autocompleter-choices li.autocompleter-selected {
	background-color:		#444;
	color:					#fff;
}

ul.autocompleter-choices span.autocompleter-queried {
	font-weight:			bold;
}

ul.autocompleter-choices li.autocompleter-selected span.autocompleter-queried {
	color:					#9FCFFF;
}

/* Calendrier */
div.calContainer {
	width:auto;
	height:auto;
	border:0px;
}

div.calBackground {
	width:auto;
	height:auto;
	border: 2px outset white;
	background-color: #c0c0c0;
	padding:2px;
}

table.calendar  {
	width:auto;
	height:auto;
	border: 1px solid #c0c0c0;
	border-collapse: collaspe;
	background-color: #c0c0c0;
	color: #000;
	text-align: center;
	font-family: Arial, Verdana, Helvetica, Sans-Serif;
	font-size: 10pt;
	font-weight: normal;
	padding:2px;
	margin:0px;
}

.calendar th {
	width:auto;
	height:20px;
	border: 1px solid #c0c0c0;
	border-collapse: collaspe;
	background-color: #eeeeee;
	color: #000;
	text-align: center;
	font-family: Arial, Verdana, Helvetica, Sans-Serif;
	font-size: 8pt;
	font-weight: normal;
	padding:2px;
	margin:0px;
}

.calendar tr {
	width:auto;
	height:15px;
	border: 1px solid #c0c0c0;
	border-collapse: collaspe;
	background-color: #c0c0c0;
	color: #000;
	text-align: center;
	font-family: Arial, Verdana, Helvetica, Sans-Serif;
	font-size: 10pt;
	font-weight: normal;
	padding:2px;
	margin:0px;
}

.calendar tr.calendar_header {
	width:auto;
	height:20px;
	border: 1px solid #c0c0c0;
	border-collapse: collaspe;
	background-color: #c0c0c0;
	color: #000;
	text-align: center;
	font-family: Arial, Verdana, Helvetica, Sans-Serif;
	font-size: 10pt;
	font-weight: bold;
	padding:2px;
	margin:0px;
}

.calendar td {
	width:auto;
	height:15px;
	border: 1px solid #c0c0c0;
	border-collapse: collaspe;
	background-color: #ffddcc;
	color: #000;
	text-align: center;
	font-family: Arial, Verdana, Helvetica, Sans-Serif;
	font-size: 8pt;
	font-weight: bold; 
	vertical-align: middle;
	padding:2px;
	margin:0px;
}

.calendar td.calendar_header {
	width:auto;
	height:15px;
	border: 1px solid #c0c0c0;
	border-collapse: collaspe;
	background-color: #c0c0c0;
	color: #000;
	text-align: center;
	font-family: Arial, Verdana, Helvetica, Sans-Serif;
	font-size: 10pt;
	font-weight: bold;
	padding:2px;
	margin:0px;
}

.calendar td.calendar_today {
	width:auto;
	height:15px;
	border: 1px solid #c0c0c0;
	border-collapse: collaspe;
	background-color: #c0c0c0;
	color: #000;
	text-align: center;
	font-family: Arial, Verdana, Helvetica, Sans-Serif;
	font-size: 10pt;
	font-weight: bold;
	padding:2px;
	margin:0px;
}

.calendar td.calendar_day {
	width:auto;
	height:15px;
	border: 1px solid #c0c0c0;
	border-collapse: collaspe;
	background-color: #dddddd;
	color: #000;
	text-align: center;
	font-family: Arial, Verdana, Helvetica, Sans-Serif;
	font-size: 10pt;
	font-weight: bold;
	padding:2px;
	margin:0px;
}

.calendar td.calendar_noday {
	width:auto;
	height:15px;
	border: 1px solid #c0c0c0;
	border-collapse: collaspe;
	background-color: #ffffff;
	color: #000;
	text-align: center;
	font-family: Arial, Verdana, Helvetica, Sans-Serif;
	font-size: 10pt;
	font-weight: bold;
	padding:2px;
	margin:0px;
}

.ma_class_calendar td.calendar_today {
	background-color: red;
}

.ma_class_calendar td.calendar_noday {
	background-color: #ffffff;
}

.ma_class_calendar td.calendar_day {
	background-color: blue;
}

.popupInformation {
   background-color: #C6CeB4;
   border:1px solid #4b4d46;
   padding:3px;
   position:absolute;
}

.menu-onglet {                      /* boite qui contient le menu (les onglets) */
  border-bottom:solid 1px black ;   /* crée le trait noir en-dessous des onglets */
  padding-top:12px ;                /* marge intérieure haute */
  padding-bottom:7px                /* marge intérieure basse */
} 

.onglet {                           /* style des onglets inactifs */
  border:solid 1px black ;          /* encadrement */
  margin:5px 5px 0px 5px ;          /* marge extérieure */
  padding:7px 3px 7px 3px           /* marge intérieure */
} 

a.onglet {                          /* style des liens se trouvant dans un onglet inactif */
  background-color:#E7E4E4 ;        /* le fond de l'onglet est gris */
  text-decoration:none              /* les liens ne sont pas soulignés */
} 

.onglet-actif {                     /* style de l'onglet de la page active */
   border:solid 1px black ;         /* l'encadrement est porté à 2 pixels */
   border-bottom:solid 3px white ;  /* le trait inférieur est effacé */
   margin:5px 5px 0px 5px ;         /* marges intérieures */
   padding:7px 3px 5px 3px ;        /* marges extérieures */  
   background-color:white           /* le fond de l'onglet actif est blanc*/
} 
