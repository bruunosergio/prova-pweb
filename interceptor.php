<?php

error_reporting(0);
$class = $_GET['class'];
$method = $_GET['method'];

$class .= 'Controller';

require_once 'controllers/'.$class.'.php';

$object = new $class();

$object->$method();

?>