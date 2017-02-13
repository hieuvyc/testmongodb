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
  <form id="myform" action="xyLyThem.php" method="POST" enctype="multipart/form-data">
   <div class="form-group">
      <label for="hoten">Ho Ten:</label>
      <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Enter Ho Ten">
    </div>
    <div class="form-group">
      <label for="sdt">Phone:</label>
      <input type="number" class="form-control" id="sdt" name="sdt" placeholder="Enter Phone">
      <span id="sdt-result"></span>
    </div>
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="diachi">Dia Chi:</label>
      <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Enter Dia Chi">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<script>
$("#sdt").keyup(function (e) { //user types username on inputfiled
   var sdt = $(this).val(); //get the string typed by user
   $.post('check_sdt.php', {'sdt':sdt}, function(data) { //make ajax call to check_username.php
   $("#sdt-result").html(data); //dump the data received from PHP page
   if(data=="OK")
   {
    return true;
   }
   else
   {
    return false;
   }
   });
});

 </script>

</body>
</html>
