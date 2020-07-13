<?php
class Database {

    private $host = "localhost";
    private $db_name = "messenger_app";
    private $db_user = "root";
    private $db_pass = "";
    protected $con;

    public function __construct()
    {
        try{

            $this->con = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->db_user,$this->db_pass);
         

        }catch(Exception $e){

               echo "database connexion failed".$e->getMessage();

        }
        
    }



}