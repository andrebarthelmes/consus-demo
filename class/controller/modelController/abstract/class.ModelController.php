<?php
abstract class ModelController 
{
	private $model;
	
	public function __construct()
	{
	}
	
	public function setModel($_model)
	{
		$this->model = $_model;
	} 
	
	public function getModel()
	{
		return $this->model;
	}
}
?>