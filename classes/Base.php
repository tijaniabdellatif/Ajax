<?php

class Base extends Database
{


    private $Query;

    //Simple Crud
    public function GeneralQuery($query,$param = null)
    {
        
         if(is_null($param)){
       $this->Query = $this->con->prepare($query);
       return $this->Query->execute();
        }
        else{
            $this->Query = $this->con->prepare($query);
            return $this->Query->execute($param);
        }
    }

    public function CountRows(){
        return $this->Query->rowCount();
    }

    public function FetchingData(){

        return $this->Query->fetchAll(PDO::FETCH_OBJ);
    }


    
}