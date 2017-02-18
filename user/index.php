<?php

// echo "<script>alert('".$_POST['album']."');</script>";

session_start();
if(!isset($_SESSION['email'])){
  header("Location: ../index.php");
}
include_once "../api.php";
// creating a album
// echo $_SESSION['key'];
$api = new api();
$data = $api->getAlbum($_SESSION['key']);

// echo($data['albums'][0]);
if(isset($_POST['album_name']) && isset($_POST['description'])){
  $add = $api->addAlbum($_SESSION['key'],$_POST['album_name'],$_POST['description']);
  if($add){
    echo "<script>alert('Album Created!');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
  }
}


// file upload
include_once "upload.php";


?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Hackathon | Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
</head>

<body>
  <div class="login-page">

  
<h2 style="text-align:center">Welcome <?= $_SESSION['name']; ?></h2>
  <div class="form">
       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">View Album</button>
       <hr>
       
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create Album</button>
    <p class="center">OR</p>

   

    <form class="login-form" action="index.php" method="post" enctype="multipart/form-data">
      <label for="sel1">Select Album:</label>
        <select class="form-control" id="sel1" name="album">
          <?php
            foreach($data['albums'] as $x){
          ?>
          
          <option value="<?= $x;?>"><?= $x;?></option>
          <?php
          }
          ?>
          </select>
          
      
      <p style="margin-top:30px">Select Image(s)</p>
      <input type="file" name="image[]" multiple style="background-color:#4CAF50;color:white;" required><br>

      <!--<input type="email" placeholder="email" name="email"/>-->
      <!--<input type="password" placeholder="password" name="password"/>-->
      <button type="submit" name="submit">Upload!</button>
<!--       <p class="message">Not registered? <a href="#">Create an account</a></p>
 -->    </form> 
 <hr>
 <a href="../logout.php"><p>Sign out!</p></a>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>

<?php
include "model.php";

?>