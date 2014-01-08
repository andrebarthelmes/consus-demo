<?php

/*
 * Erweiterung des "Datenbank"-SC-Items um z.B. Unterobjekte wie $item
 * muss "abstract" sein ?
 */

class ShoppingCartItem extends TemplateShoppingCartItem
{
	private $item;
		
	public function __construct()
	{
	
	}	
	
	public function getItem(){						return $this->item;}
	
	public function setItem($_item){					$this->item = $_item;}	
}
?>