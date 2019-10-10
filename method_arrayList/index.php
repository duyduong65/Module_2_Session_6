<?php
include_once "MyList.php";

$myList = new MyList();

$myList->add(4,4);
$myList->add(3,3);
$myList->add(2,2);
$myList->add(1,1);


var_dump( $myList->myList);

