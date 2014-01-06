<?php
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