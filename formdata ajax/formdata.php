<?php
$errorcheck = 1;
if (isset($_POST['submit'])) {

    $errorcheck = 0;

    // profile pic validation
    $target_dir = "uploads/";
    $profile = $_FILES['profile']['name'];
    $target_file = $target_dir . basename($_FILES["profile"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["profile"]["tmp_name"]);
    $allowed_image_extension = array("png", "jpg", "jpeg");

    // written by me
    // $profile = $name . '.' . $imageFileType;
    // $target_file = $target_dir . basename($profile);

    if (empty($_FILES["profile"]["name"])) {
        $profile_Err = 'Please select image';
        $errorcheck = 1;
    }
    // Check file size
    elseif ($_FILES["profile"]["size"] > 50000) {
        $profile_Err = 'Sorry, your file is greater than 50kb.';
        $errorcheck = 1;
    } elseif (!in_array($imageFileType, $allowed_image_extension)) {
        $profile_Err = 'Sorry, only JPG, JPEG & PNG files are allowed.';
        $errorcheck = 1;
    } elseif ($errorcheck == 0) {
        move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file);
        echo '<img src="' . $target_file . '" alt="" style="height: 500px; width: 800px"><br><br>';
    } else {
        $profile_Err = 'Sorry, there was an error uploading your file.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <script>
        $(document).ready(function() {
            $("form#files").submit(function(e) {
                e.preventDefault();

                var formData = new FormData();
                formData.append('file', $('#file')[0].files[0]);
                formData.append('name', $('#name').val());

                $.ajax({
                    url: 'ajax.php',
                    type: 'POST',
                    data: formData,
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    success: function(data) {
                        $('.test').html('');
                        $('.test').append(data);
                    }
                });
            });
        })
    </script>

    <div class="container mt-4">
        <form id="files" method="post" enctype="multipart/form-data" action="">
            <input name="profile" id="file" type="file" />
            <input name="name" id="name" type="text" />
            <button>Submit</button>
        </form>
    </div>
    <hr>
    <div class="container mt-4">
        <div class="test"></div>
    </div>
</body>

</html>