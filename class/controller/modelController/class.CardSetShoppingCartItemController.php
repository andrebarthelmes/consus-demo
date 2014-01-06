<?php
class CardSetShoppingCartItemController extends ShoppingCartItemController
{	
	public function __construct($_createModel = true)
	{
		if($_createModel)
		{
			$this->model = new CardSetShoppingCartItem();
		}		
	}
	
	public function configureSomething()
	{
		// configure
	}	
}
?>