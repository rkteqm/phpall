<?php 
$errorcheck = 1;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //die('here');
    $errorcheck = 0;

    // profile pic validation
    $target_dir = "uploads/";
    $profile = $_FILES['file']['name'];
    $target_file = $target_dir.basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    $allowed_image_extension = array("png", "jpg", "jpeg");

    // written by me
    // $profile = $name . '.' . $imageFileType;
    // $target_file = $target_dir . basename($profile);

    if (empty($_FILES["file"]["name"])) {
        $profile_Err = 'Please select image';
        $errorcheck = 1;
    }
    // Check file size
    elseif ($_FILES["file"]["size"] > 50000) {
        $profile_Err = 'Sorry, your file is greater than 50kb.';
        $errorcheck = 1;
    } elseif (!in_array($imageFileType, $allowed_image_extension)) {
        $profile_Err = 'Sorry, only JPG, JPEG & PNG files are allowed.';
        $errorcheck = 1;
    } elseif ($errorcheck == 0) {
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        echo '<img src="' . $target_file . '" alt="" style="height: 500px; width: 800px"><br><br>';
        echo "<p>". $_POST['name']. "</p>";
    } else {
        $profile_Err = 'Sorry, there was an error uploading your file.';
    }
}


?>