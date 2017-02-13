<?php
  
  $id = isset($_GET['id']) ? addslashes($_GET['id']) : '';

  $hoten = isset($_POST['hoten']) ? addslashes($_POST['hoten']) : '';
  $email = isset($_POST['email']) ? addslashes($_POST['email']) : '';
  $sdt = isset($_POST['sdt']) ? addslashes($_POST['sdt']) : '';
  $diachi = isset($_POST['diachi']) ? addslashes($_POST['diachi']) : '';

  //echo $id,$hoten,$email,$sdt,$diachi; die();

    include("mongodb.php");
	
   //echo "Database vyctravel selected";

   $collection = $db->khachhang;
   //echo "Collection selected succsessfully";

  $collection->update(['_id' => new MongoId($id)], ['$set' => ['hoTen' => $hoten,'email' => $email,'phone' => $sdt,'diaChi' => $diachi ]]);


  header("Location: khachHang.php");
   
?>