<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <!----------------------------------- Registeration form -------------------------------------->
    <div class="container">
        <label class="test"></label>
    </div>
    <div class="container mt-5">
        <h1>Please Register Here</h1>
        <hr><br>
        <form class="row g-3" action="ajax.php" method="POST" id="form" enctype="multipart/form-data">
            <div class="col-md-6">
                <label for="file" class="form-label">Upload file</label>
                <label id="file-error" class="error" for="file"></label>
                <input type="file" class="form-control" id="file" name="file">
            </div>
            <div class="col-md-6">
                <label for="fname" class="form-label">First Name</label>
                <label id="fname-error" class="error" for="fname"></label>
                <input type="text" class="form-control" placeholder="Enter your first name" value="<?php echo $fname; ?>" id="fname" name="fname">
            </div>
            <div class="col-md-6">
                <label for="lname" class="form-label">Last Name</label>
                <label class="error" id="lname-error" for="lname"></label>
                <input type="text" class="form-control" placeholder="Enter your last name" value="<?php echo $lname; ?>" id="lname" name="lname">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">E-Mail</label>
                <label class="error" id="email-error" for="email"></label>
                <input type="text" class="form-control" placeholder="Enter your email" value="<?php echo $email; ?>" id="email" name="email">
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <label class="error" id="phone-error" for="phone"></label>
                <input type="number" class="form-control" placeholder="Enter your phone number" value="<?php echo $phone; ?>" id="phone" name="phone">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <a href="" id="showpassword" class="showhidefont"><i class="fa-solid fa-eye-slash"></i></a>
                <label class="error" id="password-error" for="password"></label>
                <input type="password" class="form-control" placeholder="Enter your password" value="<?php echo $password; ?>" id="password" name="password">
            </div>
            <div class="col-md-6">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <a href="" id="showcpassword" class="showhidefont"><i class="fa-solid fa-eye-slash"></i></a>
                <label class="error" id="cpassword-error" for="cpassword"></label>
                <input type="password" class="form-control" placeholder="Enter your confirm password" value="<?php echo $cpassword; ?>" id="cpassword" name="cpassword">
            </div>
            <div class="col-md-6">
                <label for="gender" class="form-label">Gender</label>
                <label class="error" id="gender-error" for="gender"> </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="gender1" <?php echo ($gender == 'Male') ? 'checked' : '' ?> name="gender" value="Male">
                    <label class="form-check-label" for="gender">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="gender2" <?php echo ($gender == 'Female') ? 'checked' : '' ?> name="gender" value="Female">
                    <label class="form-check-label" for="gender">Female</label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>