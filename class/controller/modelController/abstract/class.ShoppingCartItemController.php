<?php
abstract class ShoppingCartItemController extends ModelController
{
	public function __construct()
	{
		
	}	
	
	public static function getConcreteController($_productType)
	{
		switch ($_productType)
		{
			case 'CardSet' :	return new CardFSetPageItemController();
			break;
			case 'Photobook' :  return new PhotobookItemController();
			break;
		}
	}
	
	protected abstract function configureSomething();
}
?>