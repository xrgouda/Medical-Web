<?php

require_once 'Firestore.php';
$fs = new Firestore('userData');
$data= [];


$id = $_POST['id'];

echo $id;

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $data = [
        'first_name'        => $_POST['first_name'],
        'last_name'         => $_POST['last_name'],
        'Mobile'            => $_POST['Mobile'],
        'Age'               => $_POST['Age'],
        'Jop'               => $_POST['Jop'],
        'Blood'             => $_POST['Blood'],
        'Gender'            => $_POST['Gender'],
        'Diseases'          => $_POST['Diseases'],
        'Surgeies'          => $_POST['Surgeies'],
        'Reatives-no'       => $_POST['Reatives-no'],
        'dr-name'           => $_POST['dr-name'],
        'dr-address'        => $_POST['dr-address'],
    ];



    $fs->updateDocuments($id ,$data);



}