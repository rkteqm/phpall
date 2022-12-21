<?php
include_once("conn.php");
if (isset($_POST['mypage']) == true) {
    $count = $_POST['count'];
    $count -= 1;
    $n = 5*$count;
    $sql = "SELECT * FROM `users` LIMIT $n,5";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        if($n == 1){
            $sr = 1;
        }else{
            $sr = $n+1;
        }
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $fname = strtoupper($row['first_name']);
            $lname = strtoupper($row['last_name']);
            $email = $row['email'];
            $phone = $row['phone_number'];
            $gender = strtoupper($row['gender']);
            $file = $row['file'];

            echo '
                <tr>
                <td>' . $sr . '</td>
                <td>' . $fname . '</td>
                <td>' . $lname . '</td>
                <td>' . $email . '</td>
                <td>' . $phone . '</td>
                <td>' . $gender . '</td>
                <td><img src="../../assignment3clone/assets/images/' . $file . '" alt="" style="height:40px; width:70px;"></td>
                </tr>
                ';
            $sr += 1;
        }
    }
}
