<?php
include 'database.php';
session_start();
$emailErr = $phoneErr = "";
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $errorcheck = 0;

    // email validation
    if (empty($email)) {
        $emailErr = "Please enter your email";
        $errorcheck = 1;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Please enter valid email";
        $errorcheck = 1;
    } elseif ($num == 1) {
        $emailErr = "Email already exist";
        $errorcheck = 1;
    }

    // phone number validation
    $phone = trim($_POST['phone']);
    if (empty($phone)) {
        $phoneErr = "Please enter your phone number";
        $errorcheck = 1;
    } elseif (!is_numeric($phone)) {
        $phoneErr = "Please enter numeric only";
        $errorcheck = 1;
    } elseif (strlen($phone) != 10) {
        $phoneErr = "Enter 10 digit only";
        $errorcheck = 1;
    }

    if ($errorcheck == 0) {
        $a = new database();
        $a->login('data', ['email' => $email, 'phone' => $phone]);
        if ($a->num == 1) {
            $_SESSION['login'] = true;
            header('location:loginportal.php');
        } else {
            $showError = 1;
            $validErr = "";
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span>Please enter correct details for login...</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
        }
    }
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <style>
        .hed {
            background: #ccc;
            color: blue;
        }

        .hed h1 {
            padding-top: 20px;
            padding-bottom: 25px;
        }

        .form {
            margin-top: 50px;
            background: #ccc;
        }

        .table {
            margin-top: 50px;
        }
    </style>
</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <section id="page-title">
            <div class="container clearfix hed">
                <center>
                </center>
            </div>
        </section>
        <div class="col-md-12 hed">
            <center>
                <h1>Login Here</h1>
            </center>
        </div>
        <div class="container">
            <a href="index.php">Register</a>
        </div>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-12" id="hide">
                            <form class="row form" action="" method="post">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label for="register-form-name">Email:</label>
                                    <input type="email" name="email" value="<?php echo $email ?>" class="form-control" / required>
                                    <span><?php echo $emailErr ?></span>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label for="register-form-name">Phone:</label>
                                    <input type="text" name="phone" value="<?php echo $phone ?>" class="form-control" / required>
                                    <span><?php echo $phoneErr ?></span>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="submit" class="btn btn-dark" name="login" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>