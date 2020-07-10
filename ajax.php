<?php

if(isset($_GET['ajax_name'])){

     echo $_GET["ajax_name"].'<br />';

    $store = array('tijani','abdellatif','alex');
     
    foreach($store as $names){

        echo $names.'<br />';
    }
}

?>