<?php
  
  function getcurrentday() {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
  $t= rand(10,99);
    return date('dmYHis').''.$t;
  }

  $id =  getcurrentday();

  $hoten = isset($_POST['hoten']) ? addslashes($_POST['hoten']) : '';
  $email = isset($_POST['email']) ? addslashes($_POST['email']) : '';
  $sdt = isset($_POST['sdt']) ? addslashes($_POST['sdt']) : '';
  $diachi = isset($_POST['diachi']) ? addslashes($_POST['diachi']) : '';

   include("mongodb.php");
	
   //echo "Database vyctravel selected";

   $collection = $db->khachhang;
   //echo "Collection selected succsessfully";

    $document = array( 
      "id" => $id, 
      "hoTen" => $hoten, 
      "email" => $email,
      "phone" => $sdt,
      "diaChi" => $diachi
   );
  
   $collection->insert($document);
  echo "Insert succsessfully";
  header("Location: khachHang.php");
   
?>