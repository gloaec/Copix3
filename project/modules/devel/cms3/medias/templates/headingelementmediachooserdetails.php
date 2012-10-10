<div class="HeadingElementChooserDetail">
	<table width="100%" cellspacing="0">
		<tr>
			<th></th>
			<th>Nom du média</th>
			<th>Taille</th>
			<th>Modifié</th>
			<th>Dernier auteur</th>
		</tr>
	<?php
		foreach ($ppo->children as $key=>$children){
			if ($children->type_hei != 'heading'){
				$element = _ioClass('medias|mediasservices')->getByPublicId($children->public_id_hei);
				echo "<tr>";
				echo "<td><input type='checkbox' ";
				if (sizeof($ppo->children) == 1){
					echo "checked='checked' class='elementchooserfileselectedstate' ";
				} else {
					echo "class='elementchooserfilenoselectedstate' ";
				}
				echo " name='' libelle='".$element->caption_hei."' pih='".$element->public_id_hei."' /></td>";
	
				$content = CopixZone::process ('medias|mediaformview', array('admin'=>true, 'options'=>array('x'=>430, 'y'=>205), 'media'=>$element, 'mediaType'=> $element->type_hei, 'identifiantFormulaire' => 'mediapreview'.$element->id_media));
				$js = new CopixJSWidget();
				$js->showMediaContent($content, $ppo->formId);
				echo '<td><a id="captionMedia'.$children->id_helt.'" href="javascript:void(0);">'.$element->caption_hei."</a></td>";	
				CopixHTMLHeader::addJSDOMReadyCode("$('captionMedia".$children->id_helt."').addEvent('click', function(){".$js."});");
							
				echo "<td>".($element->size_media ? _filter ('bytesToText')->get ($element->size_media) : '(Inconnue)')."</td>";			
				echo "<td>".CopixDateTime::yyyymmddhhiissToFormat($element->date_update_hei, 'Y-m-d')."</td>";
				echo "<td>".$element->author_caption_update_hei."</td>";
				echo "</tr>";
			} else {
				unset($ppo->children[$key]);
			}
		}
	?>
	</table>
	<?php
		if (count($ppo->children) == 1){
			CopixHTMLHeader::addJSDOMReadyCode($js); 
		} else {
			CopixHTMLHeader::addJSDOMReadyCode("showMediaContent(\"<div style='text-align: center;'>Aperçu<br />Cliquez sur un média pour afficher son contenu</div>\", \"".$ppo->formId."\");"); 		
		}
	?>
</div>