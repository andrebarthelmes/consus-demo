<?php
class CardFrontPageItemController extends ItemController
{
	public function __construct($_createModel = true)
	{
		if($_createModel)
		{
			$this->model = new CardFrontPageItem();
		}
	}
}
?>