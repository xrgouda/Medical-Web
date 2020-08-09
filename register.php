<?php
 require_once 'Firestore.php';
 $fs = new Firestore('userData');
 $data= [];

 $id = 'id'.uniqid();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $data = [
            'email'    => $_POST['email'],
            'password' => $_POST['password'],
            'Mobile'      => $id,
          ];
    $fs->newDocuments($id ,$data);

   header("Location: Login.html");

  }else{
    echo 'there is error in registeration';
}













