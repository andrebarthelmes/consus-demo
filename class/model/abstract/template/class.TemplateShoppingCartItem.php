<?php
abstract class TemplateShoppingCartItem extends Model
{
	protected $table = 'shopping_cart_item';
	protected $map = array('id' 		=> array('type' 		=> 'integer', 
												 'defaultValue' => 0),
							'state'		=> array('type'			=> 'integer',
												 'defaultValue' => 0),
							'itemId'	=> array('type'			=> 'integer',
												 'defaultValue' => 0)
	);
	
	public function getId(){				return $this->get('id');}
	public function getState(){				return $this->get('state');}	
	public function getItemId(){			return $this->get('itemId');}	
		
	public function setId($_id){					$this->set('id',				 	$_id);}	
	public function setState($_state){				$this->set('state',				 	$_state);}	
	public function setItemId($_itemId){			$this->set('itemId',			 	$_itemId);}	
}
?>