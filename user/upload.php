<?php
if(isset($_FILES['image'])){
	$total = count($_FILES['image']['name']);

	for($i=0; $i<$total; $i++){
	      $file_name = $_FILES['image']['name'][$i];
	      $file_size =$_FILES['image']['size'][$i];
	      $file_tmp =$_FILES['image']['tmp_name'][$i];
	      $file_type=$_FILES['image']['type'][$i];
	      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'][$i])));
	      
	      $expensions= array("jpg","JPG");
	      
	      if(in_array($file_ext,$expensions)=== false){
	         $errors="extension not allowed, please choose a JPEG file.";
	      }
	      
	      if(empty($errors)==true){
			  $time = time();
	         move_uploaded_file($file_tmp,"/var/www/html/ingenious/guru/".$time.".jpg");
	         // echo "<script>alert('Image(s) Uploaded!');</script>";
	         // $f = $server + $file_name;  
	        //  echo "<script>window.location.href = 'http://parthchauhan.me:8080/upload?url=".$file_name."';</script>";
          $url = $time;
          $album_name = $_POST['album'];
          $name = $_SESSION['name'];
          $data = file_get_contents($GLOBALS['server'].'/upload?url='.$url.'&album='.$album_name.'&name='.$name);
	        // echo "<script>alert('".$data."');</script>";
		  
	        echo "<script>alert('file uploaded!');</script>";
		  	
	         echo "<script>window.location.href = 'index.php';</script>";
	         



	      }else{
	         echo "<script>alert('".$errors."');</script>";
	        //  echo "<script>window.location.href = 'index.php';</script>";

	      }
  	}
}



?>