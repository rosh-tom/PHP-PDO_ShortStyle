<?php 
    include 'classes/db.php'; 
    $id = "2";
    $query = "DELETE FROM users WHERE id = :id";
    $result = DB::query($query, array(':id'=>$id));
    if($result){
        echo "Success";
    }else{
        echo "Something went wrong.. ";
    } 
?>