<?php
class PhotoBookItemController extends ItemController
{
	public function __construct($_createModel = true)
	{
		if($_createModel)
		{
			$this->model = new PhotoBookItem();
		}		
	}
}
?>