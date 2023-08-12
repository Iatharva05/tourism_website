<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTourismWebsite</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
    <div>
            <div id="logo">
                <img src="logo.png" alt="Myonlinemeal.com">
            </div>
            </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="#contact">Feedback</a></li>
        </ul>

        <div>
            <div id="logo2">
                <a href="login.php"><img src="admin1.png" alt="ADMIN"></a>
                
            </div>
        </div>
    </nav>

    <section id="home">
        <h1 class="h-primary">Find Your Destination</h1>
        <p>Embark on an unforgettable journey with us and explore the world's most captivating destinations. Whether you seek breathtaking landscapes, vibrant cultures, or thrilling adventures, our traveling website is your gateway to fulfilling wanderlust dreams.
        </p>
        <a href="book.php"><button class="btn">Book Now</button></a>
    </section>


    <section id="services-container">
        <h1 class="h-primary center">Places To Explore</h1>
        <div id="services">
            <div class="box">
                <img src="taj.png" alt="">
                <h2 class="h-secondary center">Monuments</h2>
                <p class="center">Discover India's timeless wonders! Explore majestic monuments that tell captivating stories of the past. From the iconic Taj Mahal to ancient temples and forts, immerse yourself in the rich cultural heritage of India. Unveil history's architectural marvels today!</p>
            </div>
            <div class="box">
                <img src="beach.png" alt="">
                <h2 class="h-secondary center">Beaches</h2>
                <p class="center">
Escape to India's pristine shores! Experience the sun, sand, and sea at our breathtaking beaches. From Goa's vibrant coastline to the serene Andaman islands, indulge in pure bliss and create unforgettable beach memories. Dive into paradise now!</p>
            </div>
            <div class="box">
                <img src="trek.png" alt="">
                <h2 class="h-secondary center">Treaking</h2>
                <p class="center">Embark on exhilarating journeys through India's untamed wilderness! Trek amidst lush forests, majestic mountains, and cascading waterfalls. Unleash your adventurous spirit and conquer nature's wonders on thrilling trekking trails. Let the exploration begin!</p><
            </div>

            
    </section>

    <section id="services-container">
        <div id="services">
            <div class="box">
                <img src="resort.png" alt="">
                <h2 class="h-secondary center">Resorts</h2>
                <p class="center">Discover luxurious havens amidst India's diverse landscapes. Indulge in opulence and comfort at our handpicked resorts. From serene hill retreats to beachside paradises, experience unmatched hospitality and create timeless memories. Book your escape now!</p>
            </div>
            <div class="box">
                <img src="jungle.jpeg" alt="">
                <h2 class="h-secondary center">Forests</h2>
                <p class="center">Step into India's enchanting wilderness! Delve into lush forests teeming with wildlife and biodiversity. From the mystical Western Ghats to dense jungles of the Northeast, immerse yourself in nature's wonders. Unveil the wild side of India!</p>
            </div>
            <div class="box">
                <img src="temple1.png" alt="">
                <h2 class="h-secondary center">Temples</h2>
                <p class="center">Embark on a spiritual odyssey across India's sacred lands. Explore ancient temples that embody profound spirituality and architectural brilliance. From Varanasi to South India, embrace the divine essence of this sacred journey.</p><
            </div>
    </section>

    <section id="client-section">
        <h1 class="h-primary center">Our Travelling Partners</h1>
        <div id="clients">
            <div class="client-item">
                <a href="https://www.makemytrip.com/" target="_blank"> <img src="makemytrip-logo.png" alt="Our Client"></a>
            </div>
            <div class="client-item">
                <a href="https://www.holidify.com/" target="_blank"><img src="02ae7e309e377f0ec921b46f72a14391.png" alt="Our Client"></a>
                
            </div>
            <div class="client-item">
                <a href="https://www.booking.com/country/in.en.html?aid=1610687;label=in-HvtKIh8HYqxrATaP24vtSgS379630681324:pl:ta:p1:p2:ac:ap:neg:fi:tikwd-303403359744:lp1007786:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YfpWGnRw6lOGgfEoJVv7zYo;ws=&gad=1&gclid=Cj0KCQjwoK2mBhDzARIsADGbjeqD7bL-gDLrt59gRyZNYnFOt-mdPNq9fRLvX5yAGeGEYfMX3j2kKcYaAhSPEALw_wcB" target="_blank"><img src="Booking-Logo-PNG.png" alt="Our Client"></a>
                
            </div>
            <div class="client-item">
                <a href="https://www.trivago.in/" target="_blank"><img src="Trivago_logo_logotype.png" alt="Our Client"></a>
            </div>
        </div>
    </section>

    <section id="contact">
        <h1 class="h-primary center">Give Your Response</h1>
        <div id="contact-box">
            <form action="f1.php" method="post">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="name">Email: </label>
                    <input type="text" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="name">Phone Number: </label>
                    <input type="text" name="phone" id="phn" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="name">Review: </label>
                    <textarea name="review" id="message" cols="30" rows="10"></textarea>
                </div>
                <div>
                <input type="submit" value="Join" name="register"
                        style="background-color: rgba(253, 249, 249, 0.737); color: rgb(3, 3, 3); width: 130px;height: 40px; font-family: 'PT Serif Caption', serif;border-radius: 10px; ">
                </div>

                <?php
                        extract($_GET);
                        if(isset($msg))
                        {
                            echo "$msg";
                        }
                    ?>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.myTourismwebsite.com. All rights reserved..!
        </div>
    </footer>

</body>

</html>