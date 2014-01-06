<?php
class CardSetShoppingCartItemFactory extends ShoppingCartItemFactory
{

	public function __construct()
	{
	
	}	
	
	public function getBasicSCItem($_id = 0)
	{
		$this->shoppingCartItemController = new CardSetShoppingCartItemController();
		if($_id != 0)
		{
			$this->shoppingCartItemController->getModel()->loadDBValuesIntoObject($_id);
		}
	
		return $this->shoppingCartItemController;
	}	
	
	public function getFullSCItem($_id = 0, $_itemId = 0)
	{
		if ($_id == 0 && $_itemId ==0)
		{
			return null; //error!
		}
		$this->getBasicSCItem($_id);
		$this->itemFactory = ItemFactory::getConcreteFactory("CardSet");
		$createItemId = $_id == 0 ?  $_itemId : $this->shoppingCartItemController->getModel()->getItemId();
		$this->shoppingCartItemController->getModel()->setItem($this->itemFactory->getFullItem($createItemId));
		return $this->shoppingCartItemController->getModel();
	}	
}
?>