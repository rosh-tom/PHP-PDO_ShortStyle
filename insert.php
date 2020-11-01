<?php 
    include 'classes/db.php';

    $firstname  = "Tom";
    $lastname   = "Cadenas";
    $bod        = "1997-01-10";
    $result = DB::query("INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES(:firstname, :lastname, :bod)",
    array(':firstname'=>$firstname, ':lastname'=>$lastname, ':bod'=>$bod));
    if($result){
        echo "success";
    }else{
        echo "error";
    }

?>