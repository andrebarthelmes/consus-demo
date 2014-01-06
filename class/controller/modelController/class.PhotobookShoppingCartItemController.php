<?php
class PhotobookShoppingCartItemController extends ShoppingCartItemController
{
	public function __construct($_createModel = true)
	{
		if($_createModel)
		{
			$this->model = new PhotobookShoppingCartItem();
		}		
	}

	public function configureSomething()
	{
		// configure
	}
}
?>