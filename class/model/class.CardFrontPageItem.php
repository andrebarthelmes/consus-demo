<?php

/*
 * Erweiterung des allgemeinen Items und Unterobjekte der konkreten Auspr�gung
 */

class CardFrontPageItem extends Item
{
	private $designer;
	
	public function __construct()
	{
	}
	
	public function getDesigner(){								return $this->designer;}
	
	public function setDesigner($_designer){					$this->designer = $_designer;}	
}
?>