<?php 

/**
 * @return $string
 * @param [string]
 * 
 * Security
 */

function XSS($value){

return  trim(strip_tags($value));
 
}

/**
 * @return $string
 * @param [string,string]
 * 
 * Security
 */

 function CreateSession($session_name,$session_value){
     $_SESSION["$session_name"] = $session_value;
 }


