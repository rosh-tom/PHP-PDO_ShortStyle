<?php 
    include 'classes/db.php';
    $firstname  = "Joharah";
    $lastname   = "Beloria";
    $bod        = "2000-01-28";
    $id         = "1";
    $query = "UPDATE users SET users_firstname = :firstname, users_lastname = :lastname, users_dateofbirth = :bod where id = :id";
    $result = DB::query($query, array(':firstname'=>$firstname, ':lastname'=>$lastname, ':bod'=>$bod, ':id'=>$id));
    if($result){
        echo "Success";
    }else{
        echo "Something went wrong..";
    }
?>