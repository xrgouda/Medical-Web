<?php

require_once 'Firestore.php';
$fs = new Firestore('userData');
$password = $_POST['password'];
$data = [];
if ($fs->getwhere('password','=',$password)){
    $data[] = $fs->getwhere('password','=',$password);
foreach ($data as $parts){
    foreach ($parts as $items){
        $id = $items['uid'];
    }
}
echo $id;
    header('location:profile.php?id='.$id);

 }


