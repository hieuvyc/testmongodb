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
  <p><a class="btn btn-info" href="index.php">Thêm Khách</a></p>            
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
	 include("mongodb.php");
   //select table(collection)
   $collection = $db->khachhang;
   $cursor = $collection->find();
   $cursor->sort(array('hoTen' => 1));
   $cursor->limit(10000);
	 $stt=1;
	
	
	
	 foreach ($cursor as $document) {
	 echo "<tr>";
	 echo "<td>".$stt."</td>";
     echo "<td>".$document["hoTen"]."</td>";
     echo "<td>".$document["phone"]."</td>";
	 echo "<td>".$document["email"]."</td>";
	 echo "<td>".$document["diaChi"]."</td>";
	 $idd = $document["_id"];
	 echo "<td><a href='edit.php?id=$idd'>Sửa</a></td>";
	 echo "<td><a href='xuLyXoa.php?id=$idd'>Xóa</a></td>";
     echo "</tr>";
	 $stt++;
	}
	?>
    </tbody>
  </table>
</div>

</body>
</html>
