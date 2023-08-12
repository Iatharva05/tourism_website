<!DOCTYPE html>
<html>
<head>
    <title>Booking List</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e2e2e2;
        }
    </style>
</head>
<body>
    <h1>Bookings</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email ID</th>
            <th>Mobile</th>
            <th>Members</th>
            <th>Aadhar</th>
            <th>Age</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Gender</th>
            <th>Class</th>
            <th>City</th>
        </tr>
        <?php
        $con = mysqli_connect("Localhost", "root", "", "tourism");
        $sql = "SELECT * from booking";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            extract($row);
            echo "<tr>
                <td>$firstname</td>
                <td>$lastname</td>
                <td>$emailid</td>
                <td>$mobile</td>
                <td>$members</td>
                <td>$addharno</td>
                <td>$age</td>
                <td>$fromdate</td>
                <td>$todate</td>
                <td>$gender</td>
                <td>$class</td>
                <td>$destination</td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>
