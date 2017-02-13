<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>DANH SÁCH KHÁCH HÀNG</h2>
  <p><a class="btn btn-info" href="ex.php">Thêm Khách</a></p>            
  <table class="table table-bordered">
    <thead>
      <tr>
	    <th>ID</th> 
        <th>Họ Tên</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Dia Chi</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
	<?php
	function getcurrentday() {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $t= rand(10,99);
    return date('dmYHis').''.$t;
    }
	
	$stt = 1;
	include("dbcon.php");
	$s="select * from khachhang";
	$kq=mysql_query($s,$link);
	$num = mysql_num_rows($kq);
	if($num>0){
	while($d=mysql_fetch_array($kq))
		{
		$hoten = $d["tenKhach"];
		$email = $d["sdt"];
		$sdt = $d["email"];
		$diachi = $d["diaChi"];
		$id =  getcurrentday();
		
		
		include("mongodb.php");
		$collection = $db->khachhang;

		$document = array( 
		  "id" => $id, 
		  "hoTen" => $hoten, 
		  "email" => $email,
		  "phone" => $sdt,
		  "diaChi" => $diachi
	   );
	  
	   $collection->insert($document);
		
		?>
		
		
	 <tr>
	 <td><?php echo $stt; ?></td>
     <td><?php echo $hoten;  ?></td>
     <td><?php echo $sdt;  ?></td>
	 <td><?php echo $email;  ?></td>
	 <td><?php echo $diachi;  ?></td>
	 <td><?php echo "a"; ?></td>
	 <td><?php echo "b"; ?></td>
     </tr>
	<?php
		$stt++;
		
		}
	}
	?>
    </tbody>
  </table>
</div>

</body>
</html>
