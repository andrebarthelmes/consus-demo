<?php

/*
 * Da jedes Model einen Controller braucht, identische Vererbungshirarchie bei Controllern wie beim Model.
 * TemplateModel Controller werden aber nicht benötigt.
 * 
 *  Model Controller dienen u.a. dazu  switch(model->type) Answeisungen zu vermeiden. 
 *  Kommt eine neue Unterklasse hinzu müssen sonst alle switches durchsucht werden
 *  Hat eine abstrakte Eltern Klasse statt dessen deine abstrakte Methode, muss die entsprechende Methode 
 *  automatisch implementiert werden.
 *  
 *  Die getConcreteController liefert dann je nach Produkt-Typ die entsprechende Klasse, und damit die entsprechende Implementierung der Methode
 */

abstract class ShoppingCartItemController extends ModelController
{
	public function __construct()
	{
		
	}	
	
	public static function getConcreteController($_productType)
	{
		switch ($_productType)
		{
			case 'CardSet' :	return new CardFSetPageItemController();
			break;
			case 'Photobook' :  return new PhotobookItemController();
			break;
		}
	}
	
	protected abstract function configureSomething();
}
?>