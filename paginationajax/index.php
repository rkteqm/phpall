<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <table id="mytable" class="display" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once("conn.php");
                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num > 0) {
                        $sr = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $fname = strtoupper($row['first_name']);
                            $lname = strtoupper($row['last_name']);
                            $email = $row['email'];
                            $phone = $row['phone_number'];
                            $gender = strtoupper($row['gender']);
                            $file = $row['file'];

                            echo '
                                <tr class="test">
                                <td>' . $sr . '</td>
                                <td>' . $fname . '</td>
                                <td>' . $lname . '</td>
                                <td>' . $email . '</td>
                                <td>' . $phone . '</td>
                                <td>' . $gender . '</td>
                                <td><img src="../../assignment3clone/assets/images/' . $file . '" alt="" style="width:60px"></td>
                                </tr>
                                ';
                            if ($sr == 5) {
                                break;
                            }
                            $sr += 1;
                        }
                    }
                    ?>
                <tbody class="rahul"></tbody>
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                $count = $num / 5;
                $count = $count + 1;
                for ($i = 1; $i <= $count; $i++) {
                    echo '<li class="page-item"><a class="page-link mypage" href="#">' . $i . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
    <script>
        $(document).ready(function() {
            $('.mypage').click(function() {
                var count = $(this).html();
                $.ajax({
                    url: 'pagination_data.php',
                    type: 'post',
                    data: ({
                        'mypage': true,
                        'count': count
                    }),
                    success: function(response) {
                        $('.test').html('');
                        $('.rahul').html('');
                        $('.rahul').append(response);
                    }
                });
            });
        });
    </script>

</body>

</html>