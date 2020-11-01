<?php 

class DB {
    
    private static function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

    public static function query($query, $params = array()){
         ($statement = self::connect()->prepare($query));
            if($statement->execute($params)){
                if(explode(' ', $query)[0] == 'SELECT'){
                    $data = $statement->fetchAll();
                    return $data;
                } 
                return true;
            }else{
                return false;
            }
            
        
    }
}