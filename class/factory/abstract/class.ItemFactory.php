<?php
class ItemFactory extends Factory
{
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
	
	abstract protected function getBasicSCItem($id = 0);
	
	abstract protected function getFullItem($id = 0);
	
}
?>