<?php
/* 
* Sub Menu for assignments
*
*/

$sub_menu = array(
  'Kmom1'  => array('text'=>'Kmom1', 'id'=>'1' ,'url'=>'redovisningar.php?id=1'),
  'Kmom2'  => array('text'=>'Kmom2', 'id'=>'2' ,'url'=>'redovisningar.php?id=2'),
  'Kmom3'  => array('text'=>'Kmom3', 'id'=>'3' ,'url'=>'redovisningar.php?id=3'),
  'Kmom4'  => array('text'=>'Kmom4', 'id'=>'4' ,'url'=>'redovisningar.php?id=4'),
  'Kmom5'  => array('text'=>'Kmom5', 'id'=>'5' ,'url'=>'redovisningar.php?id=5'),
  'Kmom6'  => array('text'=>'Kmom6', 'id'=>'6' ,'url'=>'redovisningar.php?id=6'),
  'Kmom7'  => array('text'=>'Kmom7', 'id'=>'7' ,'url'=>'redovisningar.php?id=7'),
);

return CNavigation::GenerateMenu($sub_menu);