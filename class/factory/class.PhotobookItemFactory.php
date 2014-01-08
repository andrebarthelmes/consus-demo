<?php
class PhotobookItemFactory extends ItemFactory
{

	public function __construct()
	{
	
	}		

	public function getBasicSCItem($_id = 0)
	{
		$this->itemController = new PhotoBookItemController();
		// Wenn id vorhanden fülle mit Werten aus DB
		if($_id != 0)
		{
			$this->itemController->getModel()->loadDBValuesIntoObject($_id);
		}
	
		return $this->itemController;
	}	
	
	public function getFullItem($_id = 0)
	{
		$this->getBasicItem($_id);
		// no further subObject to load here for photobooks
		return $this->itemController;		
	}
}
?>