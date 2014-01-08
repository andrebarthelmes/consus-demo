<?php
class ItemFactory extends AbstractFactory
{
	// Rückgabe der Factory
	private $itemController;
	
	public function __construct()
	{
		
	}

	public static function getConcreteFactory($_productTypeCategory)
	{
		switch ($_productTypeCategory)
		{
			case 'CardSet' :	return new CardFrontPageItemFactory();
			break;
			case 'Photobook' :  return new PhotobookItemFactory();
			break;
		}
	}	
	
	/*
	 * Das BasicItem hat keine Unter-Objekte 
	 */
	
	abstract protected function getBasicItem($id = 0);
	
	/*
	 * Das FullItem bau alle Unter-Objekte auf
	 */
	
	abstract protected function getFullItem($id = 0);
	
	/*
	 * Weitere Abstufungen zwischen Basic und Full auch möglich
	 */
	
}
?>