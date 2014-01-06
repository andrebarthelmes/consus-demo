<?php
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