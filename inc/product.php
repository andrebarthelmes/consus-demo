<?php 

/*
 * Inc-File einer Seite. Anhand der Params wird die entsprechende Methode im Use-Case-Controller 
 * aufgerufen. Diese "konfigurieren" des Objekt. Wenn alles fertig konfiguriert ist werden die 
 * nötigen Variablen von dort geholt und an smarty übergeben.
 */

$global['inc']['vert']		= 'navigation.tpl';
$global['inc']['content'] 	= 'content.tpl';

$auth->check();
$autho->check('admin');

global $params;
global $mdb2;

$variable = NULL;

$myProductPageController = new ProductPageController($params['productTypeCategory']);

if(array_key_exists('action', $params))
{
	
	if($params['action'] == 'action1')
	{
		$myProductPageController->doAction1();
		$variable = $myProductPageController->getVariable();
	}

	if($params['action'] == 'action2')
	{
		$myProductPageController->doAction2($params['action2Variable']);
		$variable = $myProductPageController->getVariable();		
	}
}

$smarty->assign('variable', $variable);
?>