<?php

if(isset($_POST['ajax_name'])){

    // echo $_POST["ajax_name"];

    $store = array('tijani','abdellatif','alex');

    foreach($store as $names){

        echo $names.'<br />';
    }
}

?>