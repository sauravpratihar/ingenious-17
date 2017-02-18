<?php

$GLOBALS = array(
    'server' => "http://parthchauhan.me:8080"
);

class api{
   
// $server = "";
    
    public function login($email, $password){
        // echo $server;
        $data = file_get_contents($GLOBALS['server'].'/login?email='.$email);
        $json = json_decode($data, true);
        
        // sessions
        $_SESSION['key'] = $json['key'];
        $_SESSION['name'] = $json['name'];
        $_SESSION['passwd'] = $json['passwd'];
        $key = $json['key'];


        
        // return $json['key'];
        // check password
        if($password == $json['passwd']){
            return true;
        }

        else
            return false;
       
    }


    public function getAlbum($key){
        $data = file_get_contents($GLOBALS['server'].'/getAlbum?key='.$key);
        $json = json_decode($data, true);

        return $json;
    }


    public function addAlbum($key,$name,$data){
        $data = file_get_contents($GLOBALS['server'].'/addAlbum?key='.$key."&name=".$name."&data=".str_replace(" ","%25",$data));
        // $json = json_decode($data, true);
        
        return $data;
    }

     public function getImages($name){
        $data = file_get_contents($GLOBALS['server'].'/getPhoto?album='.$name);
        $json = json_decode($data, true);
        
        return $json;
    }

   
    
}


?>