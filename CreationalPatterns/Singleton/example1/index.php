<?php
include_once ("Singleton.php");


$singleton = Singleton::getInstance();
var_dump($singleton, "<br>");

$singleton2 = Singleton::getInstance();
var_dump($singleton2, "<br>",$singleton === $singleton2);