<?php
class ShoppingCartItemFactory extends Factory
{
	private $shoppingCartItemController;
	private $itemFactory;
	
	public function __construct()
	{
		
	}

	public static function getConcreteFactory($_productTypeCategory)
	{
		switch ($_productTypeCategory) 
		{
			case 'CardSet' :	return new CardSetShoppingCartItemFactory();
								break;
			case 'Photobook' :  return new PhotobookShoppingCartItemFactory();
								break;
		}
	}
	
	abstract protected function getBasicSCItem($id = 0);
	
	abstract protected function getFullSCItem($id = 0, $itemId = 0);
}
?>