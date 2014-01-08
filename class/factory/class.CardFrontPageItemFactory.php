<?php
class CardFrontPageItemFactory extends ItemFactory
{

	public function __construct()
	{
	
	}		
	
	public function getBasicSCItem($_id = 0)
	{
		$this->itemController = new CardFrontPageItemController();
		// Wenn id vorhanden f�lle mit Werten aus DB
		if($_id != 0)
		{
			$this->itemController->getModel()->loadDBValuesIntoObject($_id);
		}
	
		return $this->itemController;
	}	
	
	public function getFullItem($_id = 0)
	{
		// zuerst mal Basis aufbauen
		$this->getBasicItem($_id);
		// dann Sachen dazuf�gen
		$this->itemController->getModel()->setImageField(new imageField());
		return $this->itemController;		
	}
}
?>