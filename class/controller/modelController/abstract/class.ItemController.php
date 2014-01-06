<?php
abstract class ItemController extends ModelController
{
	public function __construct()
	{
	}
	
	public static function getConcreteController($_productType)
	{
		switch ($_productType)
		{
			case 'CardFrontPage' :	return new CardFrontPageItemController();
			break;
			case 'Photobook' :  return new PhotobookItemController();
			break;
		}
	}	
}
?>