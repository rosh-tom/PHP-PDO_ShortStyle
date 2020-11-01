<?php 
    include 'classes/db.php'; 

    $id="1";
    $rows = DB::query("SELECT * FROM users");

    foreach($rows as $row){
        echo $row['users_firstname'] . "<hr>";
    }
    echo "<br>"; 
   
        $name = DB::query("SELECT users_firstname FROM users where id = :id", array(':id'=>$id));
        if($name == null){
            echo "fsdfsdfsd";
        }else{
            echo $name[0]['users_firstname'];
        }
 
        // $info = DB::query("SELECT * FROM users where id = :id", array(':id'=>$id)); 
        // echo $info[0]['users_lastname'];
    
   
    
?>





