<?php

/*
 * Template Klasse: Datenbank-Namen für Tabllen und Spalten werden definiert und auf getter und setter gemapt.
 */

abstract class TemplateItem extends Model
{
	protected $table = 'item';
	protected $map = array('id' 		=> array('type' 		=> 'integer', 
												 'defaultValue' => 0),
							'name'		=> array('type'			=> 'string',
												 'defaultValue' => '')
							);
	
	public function getId(){				return $this->get('id');}
	public function getName(){				return $this->get('name');}
	
	public function setId($_id){				$this->set('id',				 	$_id);}
	public function setName($_name){			$this->set('name',				 	$_name);}
}
?>