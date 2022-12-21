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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" id="searchBox" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <table id="myTable" class="table" width="100%" cellspacing="0">
                <thead>
                    <tr class="header">
                        <th>Sr. No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody class="rahul">
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
                            if ($sr == 5) {
                                break;
                            }
                            $sr += 1;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                $count = ceil($num / 5);
                for ($i = 1; $i <= $count; $i++) {
                    if ($i == 1) {
                        echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
                    } else {
                        echo '<li class="page-item"><a class="page-link" href="#">' . $i . '</a></li>';
                    }
                }
                ?>
            </ul>
        </nav>
    </div>
    <script>
        $(document).ready(function() {
            $('.page-link').click(function() {
                $(".page-item").removeClass("active");
                addclas = $(this).parent();
                addclas.addClass("active")
                var count = $(this).html();
                $.ajax({
                    url: 'pagination_data.php',
                    type: 'post',
                    data: ({
                        'mypage': true,
                        'count': count
                    }),
                    success: function(response) {
                        $('.rahul').html('');
                        $('.rahul').append(response);
                    }
                });
            });
        });

        function performSearch() {

            // Declare search string 
            var filter = searchBox.value.toUpperCase();

            // Loop through first tbody's rows
            for (var rowI = 0; rowI < trs.length; rowI++) {

                // define the row's cells
                var tds = trs[rowI].getElementsByTagName("td");

                // hide the row
                trs[rowI].style.display = "none";

                // loop through row cells
                for (var cellI = 0; cellI < tds.length; cellI++) {

                    // if there's a match
                    if (tds[cellI].innerHTML.toUpperCase().indexOf(filter) > -1) {

                        // show the row
                        trs[rowI].style.display = "";

                        // skip to the next row
                        continue;

                    }
                }
            }

        }

        // declare elements
        const searchBox = document.getElementById('searchBox');
        const table = document.getElementById("myTable");
        const trs = table.tBodies[0].getElementsByTagName("tr");

        // add event listener to search box
        searchBox.addEventListener('keyup', performSearch);
    </script>

</body>

</html>