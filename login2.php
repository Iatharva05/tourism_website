<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1{
            font-family: 'Dai Banna SIL', serif;
            font-size: 50px;
            text-align: center;
        }
        body{
            background: url(back.png);
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .center {
    text-align: center;
}

.h-secondary {
    font-size: 2.1rem;
    padding: 12px;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

#services {
    margin: -2px;
    display: flex;
}

#services .box {
    border: 2px solid brown;
    padding: 34px;
    margin: 31px;
    border-radius: 28px;
    background: #f2fffa;
}

#services .box img {
    height: 156px;
    margin: auto;
    display: block;
    border-radius: 20px;
}

#services .box p {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
    border-radius: 5px;
  border: none;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  display: block;
  margin: 0 auto;
}
button:hover {
  background-color: #45a049;
}
   </style>
   <script>
    function openbooking() {
    window.open('bookinglist.php', '_blank');
  }

  function openreview() {
    window.open('contactlist.php', '_blank');
  }

  function openlogout() {
    window.open('index.php', '_blank');
  }
   </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dai+Banna+SIL:wght@700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Welcome Admin</h1>

    <section id="services-container">
        <div id="services">
            <div class="box">
                <img src="booking.png" alt="">
                <h2 class="h-secondary center">Bookings</h2>
                <p class="center">"Hello Admin, kindly review the latest bookings on the dashboard. Stay updated and manage reservations efficiently.Your prompt attention is appreciated. Thank you."</p>
                    <button onclick="openbooking()">See Booking</button>
            </div>
            <div class="box">
                <img src="review.png" alt="">
                <h2 class="h-secondary center">Reviews</h2>
                <p class="center">"Dear Admin, take a moment to review website feedback. Valuable insights await on the reviews page. Your attention to user experiences is greatly appreciated. Thank you."</p>
                    <button onclick="openreview()">See Reviews</button>
            </div>
        </section>
        <button onclick="openlogout()">Log Out</button>

</body>
</html>
