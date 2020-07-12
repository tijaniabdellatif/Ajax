<?php

define("HOST","localhost");
define("DB_NAME","messenger_app");
define("DB_USER",'root');
define("DB_PASS",'');

try{

    $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);

} catch(PDOException $e){

    echo $e->getMessage();
}

$name = "tijani abdellatif from hell";
$email = "tijani@tijani.com";
$password = "mypass";
$id = 2;

// $query = $db->prepare("INSERT INTO users (name,email,password) VALUES(?,?,?)");
// $query->execute([$name,$email,$password]);

// if($query){

//     echo 'data inserted';
// }

// else {

//     echo "sorry";
// }


$query = $db->prepare('UPDATE users SET name=? WHERE id =?');
$query->execute([$name,$id]);
if($query){

    echo "success";
}

else{

    echo "not ok";
}
