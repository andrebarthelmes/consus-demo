<?php
class CardFrontPageItemFactory extends ItemFactory
{

	public function __construct()
	{
	
	}		
	
	public function getBasicSCItem($_id = 0)
	{
		$this->itemController = new CardFrontPageItemController();
		if($_id != 0)
		{
			$this->itemController->getModel()->loadDBValuesIntoObject($_id);
		}
	
		return $this->itemController;
	}	
	
	public function getFullItem($_id = 0)
	{
		$this->getBasicItem($_id);
		$this->itemController->getModel()->setImageField(new imageField());
		return $this->itemController;		
	}
}
?>