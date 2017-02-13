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
  <h2>Test MongoDB</h2>
  
  <?php
  
  $id = isset($_GET['id']) ? addslashes($_GET['id']) : '';
  
   include("mongodb.php");
   //select table(collection)
   $collection = $db->khachhang;
   $document = $collection->findOne(array('_id' => new MongoId($id)));
   //echo $document["phone"]; die()
   
  ?>
  <form id="myform" action="xyLyEdit.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
   <div class="form-group">
      <label for="hoten">Ho Ten:</label>
      <input type="text" class="form-control" id="hoten" name="hoten" value="<?php echo $document["hoTen"]; ?>" placeholder="Enter Ho Ten">
    </div>
    <div class="form-group">
      <label for="sdt">Phone:</label>
      <input type="number" class="form-control" id="sdt" name="sdt" value="<?php echo $document["phone"]; ?>" placeholder="Enter Phone">
    </div>
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $document["email"]; ?>" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="diachi">Dia Chi:</label>
      <input type="text" class="form-control" id="diachi" name="diachi" value="<?php echo $document["diaChi"]; ?>" placeholder="Enter Dia Chi">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
