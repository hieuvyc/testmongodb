<?php

//check we have username post var
if(isset($_POST["sdt"]))
{
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

     //trim and lowercase username
    $sdt =  strtolower(trim($_POST["sdt"]));

    //sanitize username
    $sdt = filter_var($sdt, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
   
   include("mongodb.php");

   //select table(collection)
   $collection = $db->khachhang;
   $document = $collection->findOne(array('phone' => $sdt)); //find by document

    //return total count
    $username_exist = $document["phone"];; //total records

    //if value is more than 0, username is not available
    if($username_exist) {
        echo 'KHÁCH ĐÃ TỒN TẠI';
    }else{
        echo 'OK';
    }

}
?>
