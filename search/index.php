<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #searchBox {
            box-sizing: border-box;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th,
        #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable th {
            width: 20%;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>

    <h2>My Customers</h2>

    <input type="text" id="searchBox" placeholder="Search for names..">

    <table id="myTable">
        <thead>
            <tr class="header">
                <th>Date</th>
                <th>Home</th>
                <th>Time</th>
                <th>Away</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>08/01/2018</td>
                <td>SPAIN</td>
                <td>16:30 ET</td>
                <td>USA</td>
                <td>BARCELONA</td>
            </tr>
            <tr>
                <td>08/02/2018</td>
                <td>BOLIVIA</td>
                <td>18:30 ET</td>
                <td>PORTUAL</td>
                <td>MADRID</td>
            </tr>
            <tr>
                <td>08/03/2018</td>
                <td>PUERTO RICO</td>
                <td>18:30 ET</td>
                <td>CANADA</td>
                <td>CHICAGO</td>
            </tr>
            <tr>
                <td>08/04/2018</td>
                <td>MEXICO</td>
                <td>19:30 ET</td>
                <td>ENGLAND</td>
                <td>LONDON</td>
            </tr>
        </tbody>
    </table>

    <script>
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