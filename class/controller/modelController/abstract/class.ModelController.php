<?php

/*
 * Jeder ModelController verwaltet ein Model, die abstrakte Eltern Klasse aller Model-Controller legt den Zugriff darauf fest
 */

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