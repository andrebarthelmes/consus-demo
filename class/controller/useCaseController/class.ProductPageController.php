<?php
class ProductPageController
{

	private $scItem;
	private $scItemFactory;
	
	public function __construct($_productTypeCategory)
	{
		$this->scItemFactory = ShoppingCartItemFactory::getConcreteFactory($_productTypeCategory) ;
	}
	
	public function doAction1()
	{		
		$this->scItem = $this->scItemFactory->getBasicSCItem();
	}
	
	public function doAction2($_id)
	{
		$this->scItem = $this->scItemFactory->getFullSCItem($_id);		
		$this->scItem->configureSomething(); // do not use Switch Case here! Might return something too!
	}
	
	public function getVariable()
	{
		return $this->scItem->getModel();
	}
	
}
?>