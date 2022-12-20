<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = array();
    $data = array(
        "file" => $_FILES['file']['name'],
        "fname" => $_POST['fname'],
        "lname" => $_POST['lname'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "password" => $_POST['password'],
        "cpassword" => $_POST['cpassword'],
        "gender" => $_POST['gender']
    );
    echo json_encode($data);
    die();
}

?>