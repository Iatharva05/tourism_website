<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&family=Marcellus&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&family=Carlito&family=Josefin+Slab&family=Marcellus&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif+Caption&display=swap" rel="stylesheet">

    <title>Booking Form</title>
    <style>
        .container {
            font-size: 20px;
            font-family: 'Marcellus', serif;
            color: black;
        }

        .radio {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        h1 {
            font-family: 'Quattrocento', serif;
            margin-left: 435px;
            margin-top: 30px;
            background-color: rgba(255, 255, 255, 0.288);
            margin-right: 371px;
            height: 50px;
            padding-top: 10px;
            border-radius: 4px;
        }

        table {
            width: 45%;
            margin-left: 29%;
            margin-right: 40%;
            height: 85%;
            background-color:rgb(255 255 255 / 49%);
            border-radius: 4px;
            margin-top: 0%;
        }

        body {
            background:  url(https://images.unsplash.com/photo-1686815532413-a0a1518d7498?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1331&q=80)no-repeat center center/cover;
    
            background-size: 100%;
        }

        input {
            border: none;
            background-color: transparent;
            border-bottom: 2px solid black;
            outline: none;
        }
        
        .custom{
            width: 660px;
            height: 35px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: transparent;
            border-radius: 6px;
        }
        ::placeholder{
            color: rgba(0, 0, 0, 0.705);
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <h1>Make Your Booking..!</h1>
     <form action="bookdata.php" style="text-align:center" method="post" enctype="multipart/form-data">
    <?php
    extract($_GET);
    if(isset($msg))
    {
        echo "$msg";
    }
    ?>

        <table>
            <tr class="container">
                <td>First Name : </td>
                <td colspan="2">Last Name : </td>
            </tr>
            <tr>
                <td><input type="text" style=width:220px;height:25px; placeholder="e.g - Taarak" name="ename" required></td>
                <td colspan="2"><input type="text" style=width:440px;height:25px; placeholder="e.g - Mehta" name="lname" required></td>
            </tr>

            <tr class="container">

                <td colspan="3">Email ID : </td>
            </tr>
            <tr>
                <td colspan="3"><input type="email" style=width:666px;height:25px; placeholder="e.g - abc123@gmail.com " name="email" required></td>
            </tr>


            <tr class="container">
                <td colspan="3">
                    Mobile No :
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="text" style=width:666px;height:25px; placeholder="e.g - 9130123444" maxlength="10" name="mob" pattern="[0-9]{10}";>
                </td>
            </tr>


            <tr class="container">
                <td>
                    Members :
                </td>
                <td colspan="2">Addhar No : </td>
            </tr>
            <tr>
                <td><input type="text" style=width:220px;height:25px; placeholder="e.g - 4" name="member" required></td>
                <td colspan="2"><input type="text" style=width:440px;height:25px placeholder="e.g - 4563 3211 9087" maxlength="12" pattern="[0-9]{12}" name="Addharno" required></td>
            </tr> 

            <tr class="container">
                <td>
                    Age :
                </td>
                <td>
                    From Date :
                </td>
                <td>
                    To Date :
                </td>
            </tr>
            <tr>
                <td><input type="number" style=width:220px;height:25px; min="18" max="60" required name="myage"></td>
                <td><input type="date" style="width: 220px;height: 25px;" required name="fromdate"></td>
                <td><input type="date" style="width: 212px;height: 25px;" required name="todate"></td>
            </tr>

            <tr class="container">
                <td>Gender : </td>
                <td colspan="2">Class : </td>
            </tr>

            <tr>
                <td class="radio">
                    <input type="radio" name="myGender" required name="myGender" value="Male"> : Male <br>

                   <input type="radio" name="myGender" required name="myGender" value="Female">: Female <br>

                <input type="radio" name="myGender" required name="myGender" value="Other"> : Other
                </td>
                <td class="radio">
                    <input type="radio" name="myClass"required name="myclassr" value="1st"> : 1st<br>

                    <input type="radio" name="myClass"required name="myclassr" value="2nd"> : 2nd <br>

                    <input type="radio" name="myClass"required name="myclassr" value="3rd"> : 3rd
                </td>
            </tr>

            <tr class="container">
                <td colspan="2">
                    Destination :
                </td>
            </tr>
            <tr>
                <td colspan="3"><select name="mycity" class="custom" required name="mycity">
                        <option value="Mumbai">Mumbai</option>
                        <option value="Banglore">Banglore</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Pune">Pune</option>
                    </select></td>
            </tr>

            <tr class="container"><td>Identity proof :</td><td> <input type="file" name="eidentity"></td></tr>

            <tr>
                <td colspan="3">
                    <input type="submit" value="Book Now" name="register"
                        style="background-color: rgba(253, 249, 249, 0.737); color: rgb(3, 3, 3); width: 130px;height: 40px; font-family: 'PT Serif Caption', serif;border-radius: 10px; ">
                    <input type="reset" value="Clear" 
                        style="background-color: rgba(253, 249, 249, 0.737); color: rgb(3, 3, 3); width: 130px;height: 40px; font-family: 'PT Serif Caption', serif;border-radius: 10px; ">
                </td>
            </tr>
        </table>

    </form>
</body>
</html>