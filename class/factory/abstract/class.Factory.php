<?php
class Factory
{
	public function __construct()
	{
		
	}

	protected abstract static function getConcreteFactory($type);

}
?>