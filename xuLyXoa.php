<?php
  
  $id = isset($_GET['id']) ? addslashes($_GET['id']) : '';


   include("mongodb.php");
	
   //echo "Database vyctravel selected";

   $collection = $db->khachhang;
   //echo "Collection selected succsessfully";

  //$collection->update(['_id' => new MongoId($id)], ['$set' => ['hoTen' => $hoten,'email' => $email,'phone' => $sdt,'diaChi' => $diachi ]]);
   $collection->remove(array("_id" => new MongoId($id)));



  header("Location: khachHang.php");
   
?>