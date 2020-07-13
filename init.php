<?php 
session_start();

include 'helpers/functions.php';

spl_autoload_register(function($class_name){
include "classes/".$class_name.".php";
});