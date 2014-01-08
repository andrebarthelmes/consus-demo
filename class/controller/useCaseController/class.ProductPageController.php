<?php

/*
 * Klasse enthält eine public Methode pro Use-Case (der das Backend erreicht), auch für Ajax Calls auf der Seite.
 * Werden Methoden zu lang private Untermethoden in dieser Klasse erstellen
 * Methoden, die von mehreren Use-Case-Controllern benötigt werden landen in den Model-Controllern
 * 
 */

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
		// Kein switch(productType)! Benutze eine Methode aus einer Controller Klasse (diese muss zu Implementierung in der Abstrakten Eltern Klasse vorgesehen sein):
		$this->scItem->configureSomething(); 
	}
	
	public function doAction3()
	{
		//hier passiert irgendwas innerhalb des "doSomethingAsychron" - Ajax - Calls
		return "done";
	}	
	
	public function getVariable()
	{
		return $this->scItem->getModel();
	}
	
}
?>