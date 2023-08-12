<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
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
    <h1>Reviews</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Review</th>
        </tr>
        <?php
        $con = mysqli_connect("Localhost", "root", "", "tourism");
        $sql = "SELECT * from contact";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            extract($row);
            echo "<tr>
                <td>$name</td>
                <td>$email</td>
                <td>$phone</td>
                <td>$review</td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>
