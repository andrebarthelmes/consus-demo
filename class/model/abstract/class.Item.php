<?php

/*
 * Erweiterung des "Datenbank"- Items um z.B. Unterobjekte wie $imageField
 * muss "abstract" sein ?
*/

class Item extends TemplateItem
{	
	private $imageField;
	
	public function __construct()
	{
	}
	
	public function getImageField(){					return $this->imageField;}
	
	public function setImageField($_imageField){		$this->imageField = $_imageField;}	
}
?>