<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $date = date("Y-m-d h:i:s A");

    if ($email2 != $email) {
        $ee = new database();
        $ee->emailExist('data', ['email' => $email]);
        if ($ee->exist == 1) {
            echo "Email already exist";
            die();
        } else {
            $a = new database();
            $a = new database();
            $a->update('data', ['name' => $name, 'email' => $email, 'phone' => $phone, 'subject' => $subject, 'message' => $message, 'updated' => $date], "id='$id'");
            if ($a == true) {
                header('location:loginportal.php');
            }
        }
    } else {
        $a = new database();
        $a = new database();
        $a->update('data', ['name' => $name, 'email' => $email, 'phone' => $phone, 'subject' => $subject, 'message' => $message, 'updated' => $date], "id='$id'");
        if ($a == true) {
            header('location:loginportal.php');
        }
    }
}
?>>