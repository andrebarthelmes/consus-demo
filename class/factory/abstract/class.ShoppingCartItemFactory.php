<?php
class ShoppingCartItemFactory extends AbstractFactory
{
	// Rückgabe der Factory
	private $shoppingCartItemController;
	// Hier könnte auch ein Array von SCIs zurückgegeben werden
	// private $shoppingCartItemControllers = = array(); 
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
	
	/*
	 * Das BasicItem hat keine Unter-Objekte
	*/
	
	abstract protected function getBasicSCItem($id = 0);
	
	/*
	 * Das FullItem bau alle Unter-Objekte auf, speziell auch das Fontpage-Item
	 * Für jedes Unter-Objekt falls vorhanden eine Factory als Klassen-Variable einbinden
	*/
	
	abstract protected function getFullSCItem($id = 0, $itemId = 0);
	
	/*
	 * Weitere Abstufungen zwischen Basic und Full auch möglich
	*/	
}
?>