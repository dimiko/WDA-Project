<?php

$array = ['items' => ['Milk', 'Eggs', 'Bread']];
$object = json_decode(json_encode($array));
foreach($object->items as $items){
  echo $items, ' '; 
}

?>