<?php
include_once "api.php";

if(isset($_POST['submit'])){
  session_start();

  if(isset($_POST['email'])  && isset($_POST['password'])){
    $_SESSION['email'] = $_POST['email']; 
    $api = new api();

    $data = $api->login($_POST['email'], $_POST['password']);

    // echo($data);
    if($data){
      header("Location: user");
    }

    else{
      echo "<script>alert('Incorrect Email ID or Password');</script>";
    }
  }

  else{
    echo "<script>alert('Wrong Email or Password!');</script>";
  }
}


?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Hackathon | Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login-page">
  <div class="form">
    
    <h3 align=center>Login</h3>
    <form class="login-form" action="index.php" method="post">
      <input type="email" placeholder="email" name="email" required/>
      <input type="password" placeholder="password" name="password" required/>
      <button type="submit" name="submit">login</button>
<!--       <p class="message">Not registered? <a href="#">Create an account</a></p>
 -->    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
