<?php
/* 
* Main Menu 
*
*/

$menu = array(
  'Hem'  => array('text'=>'Hem', 'id'=>'hem', 'url'=>'index.php'),
  'Redovisningar'  => array('text'=>'Redovisningar', 'id'=>'redovisningar', 'url'=>'redovisningar.php'),
  'Källkod' => array('text'=>'Källkod', 'id'=>'kallkod', 'url'=>'kallkod.php'),
  'Vardump' => array('text'=>'Var-dump', 'id'=>'vardump', 'url'=>'vardump.php'),
);

return CNavigation::GenerateMenu($menu);