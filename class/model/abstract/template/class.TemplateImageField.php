<?php

/*
 * Template Klasse: Datenbank-Namen für Tabllen und Spalten werden definiert und auf getter und setter gemapt.
*/

abstract class TemplateImageField extends Model
{
	protected $table = 'image_field';
	protected $map = array('id' 		=> array('type' 		=> 'integer', 
												 'defaultValue' => 0),
							'xpos'		=> array('type'			=> 'integer',
												 'defaultValue' => 0)
							);
	
	public function getId(){				return $this->get('id');}
	public function getxPos(){				return $this->get('xpos');}
	
	public function setId($_id){				$this->set('id',				 	$_id);}
	public function setxPos($_xpos){			$this->set('xpos',				 	$_xpos);}
}
?>