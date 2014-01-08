<?php
/*
 * Abstrakte Mutter-Klasse aller Models. Attribute, die einem Datenbank-Feld entsprechen (also keine Unter-Objekte sind) landen in einer Map.
 */

abstract class Model
{
	protected $table;
	protected $map;
	
	protected function get($_key)
	{
		return isset($this->map[$_key]['value']) ? $this->map[$_key]['value'] : '';
	}	
	
	protected function set($_key, $_value)
	{
		$this->map[$_key]['value'] = $_value;
	}
	
	private function setMap($_map)
	{
		foreach ($this->map as $key => $value)
		{
			$this->set($key, isset($_map[$key]) ? $_map[$key]['value'] : '');
		}	
	}	
	
	/*
	 * Lädt Werte aus der Datenbankzeile, identifiziert über den Wert $_id in der Spalte $_idRowName ins Objekt
	 */
	
	public function loadDBValuesIntoObject($_id, $_idRowName = 'id')
	{
		$sql = "SELECT
					*
				FROM
					".$this->table."
				WHERE
					".$_idRowName." = ".$_id."
				LIMIT 1";
			
		$res = wk_select($sql, array(), array());
	
		$row = (isset($res[0])) ? $res[0] : array();
	
		$this->setMap(wk_row_to_map($row, $this->map));
	}	
		
	abstract public function saveObjectValuesIntoDB();		
	
}
?>