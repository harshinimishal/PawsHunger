<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws Hunger</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d0e7ff;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            padding: 10px 20px;
            height: 70px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            text-decoration: none;
            color: #333;
            margin: 0 15px;
            font-weight: bold;
            display: inline-block;
            font-size: 1.2em;
        }
        .navbar a:hover {
            color: #007BFF;
        }
        .navbar button {
            background-color: #add8e6;
            color: #000;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .navbar button:hover {
            background-color: #87cefa;
        }
        .hero {
            position: relative;
            text-align: left;
            height: 620px;
            background-color: #b3daff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0 50px;
        }
        .hero h1 {
            margin: 0;
            font-size: 3em;
            color: #333;
            font-weight: normal;
        }
        .hero p {
            font-size: 1.5em;
            color: #666;
            margin: 20px 0;
        }
        .hero button {
            background-color: #FFFFFF;
            color: #000000;
            border: none;
            padding: 15px 30px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 20px;
        }
        .hero button:hover {
            background-color: #0056b3;
        }
        .hero img {
            position: absolute;
            top: 70px;
            right: 20px;
            max-width: 1000px;
            height: auto;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: auto;
            max-width: 100px;
            margin-right: 10px;
        }
        .logo-text {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .logo-text span {
            font-size: 1.5em;
            color: #333;
            font-weight: bold;
        }
        .logo-text .sub-text {
            font-size: 1.2em;
            font-weight: bold;
        }
        .logo-text .paw {
            font-size: 1.2em;
            font-weight: bold;
        }
        .mission-section {
            background-color: #ffffff;
            padding: 50px 20px;
            text-align: center;
            height: 600px;
        }
        .mission-section h2 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }
        .mission-section p {
            font-size: 1.2em;
            color: #666;
            line-height: 1.6;
            margin: 20px 0;
        }
        .mission-section .mission-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
            margin: 50px auto 0;
        }
        .mission-section img {
            max-width: 45%;
            height: auto;
            margin-right: 20px;
            margin-left: -10px;
            margin-top: 20px;
            border-radius: 10px;
        }
        .mission-section .text-content {
            max-width: 600px;
            text-align: left;
            margin-left: 80px;
        }
        .mission-section .text-content h3 {
            font-size: 1.5em;
            color: #333;
            margin-top: 0;
        }
        @media (max-width: 768px) {
            .mission-section .mission-content {
                flex-direction: column;
            }
            .mission-section img {
                max-width: 100%;
                margin-right: 0;
                margin-left: 0;
                margin-bottom: 20px;
            }
            .mission-section .text-content {
                margin-left: 0;
            }
        }
        .support-section {
            background-color: #f5f5f5;
            padding: 50px 20px;
            text-align: center;
        }

        .support-section h2 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 10px;
            margin-top: 50px;
        }
        .welcome-text {
            font-size: 1.5em;
            color: #87cefa;
            margin: 10px 0;
            
        }
        .support-section p {
            font-size: 1.2em;
            color: #666;
            line-height: 1.6;
            margin: 20px 0;
        }
        .support-options {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .option img {
            max-width: 250px;
            height: auto;
            margin-bottom: 10px;
        }
        .option p {
            font-size: 1.2em;
            color: #333;
            margin: 0;
        }
        @media (max-width: 768px) {
            .support-options {
                flex-direction: column;
            }
        }
        .instagram-section {
            background-color: #b3daff;
            padding: 50px 20px;
            text-align: center;
            top: 50px;
        }
  
        .instagram-section .instagram-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
            margin: 50px auto 0;
            gap: 20px;
        }
        .instagram-card {
            border-radius: 10px;
            padding: 0;
            max-width: 350px;
        }

        .instagram-card img {
            width: 350px;
            height: auto;
            display: block;
        }
    
        .instagram-header {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .paw-image {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 50px; /* Adjust the size of the paw as needed */
            height: auto;
            opacity: 0.7; /* Adjust the opacity if needed */
        }

        .icon-group img {
        margin: 0; /* Removes any default margin */
        padding: 0; /* Ensures no padding is applied */
        }


    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="Logo.png" alt="Paws Hunger Logo">
        <div class="logo-text">
            <span class="paw">Paws</span>
            <span class="sub-text">Hunger</span>
        </div>
    </div>
    <div class="nav-links">
        <a href="#">About Us</a>
        <a href="#">Volunteer</a>
        <a href="#">Adoptions</a>
        <a href="#">Contact</a>
    </div>
    <button>Donate</button>
</div>

<div class="hero">
    <h1>Feeding Hope, One Paw at a Time.</h1>
    <p>Join Us in Nourishing Stray Animals and Building a Kinder Community.</p>
    <button>Join Us</button>
    <img src="pic.png" alt="Dog and Cat">
</div>

<div class="mission-section">
    <div class="mission-content">
        <img src="Mission.png" alt="Mission Image">
        <div class="text-content">
            <h2>Our Mission</h2>
            <p><strong>Adopt a holistic approach to animal welfare.</strong></p>
            <p>We aim to provide effective, personalized healthcare for animals in distress.</p>
            <p>Reduce stray animal population and puppy mills through adoption promotion.</p>
            <p>Eradicate disease and control stray populations via vaccination and sterilization.</p>
            <p>Foster compassion, respect for animals, and community engagement in animal welfare.</p>
        </div>
    </div>
</div>
<div class="instagram-section">
    <div class="instagram-header">
        <img src="Logo.png" alt="Paws Hunger Logo" style="height: 95px; margin-right: 10px;">
        <img src="Multipy_sign.png" alt="Sign" style="height: 50px;">
        <img src="Insta_Logo.png" alt="Instagram Logo" style="height: 98px;">
    </div>
    <div class="instagram-content">
        <!-- First Row -->
        <div class="instagram-row" style="display: flex;">
            <div class="instagram-card" style="flex: 1; padding: 10px;">
                <img src="Grid_1.png" alt="Instagram Image 1" style="width: 100%; height: auto;">
            </div>
            <div class="instagram-card" style="flex: 1; padding: 10px;">
                <img src="Grid_2.png" alt="Instagram Image 2" style="width: 100%; height: auto;">
            </div>
            <div class="instagram-card" style="flex: 1; padding: 10px; position: relative;">
                <img src="Grid_3.png" alt="Instagram Image 3" style="width: 100%; height: auto;">
                <img src="Paw_dog.png" alt="Paw Image" class="paw-image">
            </div>
        </div>
        <!-- Second Row -->
        <div class="instagram-row" style="display: flex;">
            <div class="instagram-card" style="flex: 1; padding: 10px;">
                <img src="Grid_4.png" alt="Instagram Image 4" style="width: 100%; height: auto;">
                <div class="icon-group" style="display: flex; justify-content: space-around; padding-top: 10px; margin-left: -10px;">
                    <img src="Like.png" alt="Like Icon" style="height: 50px; width: 50px">
                    <img src="Comment.png" alt="Comment Icon" style="height: 50px; width: 50px ">
                    <img src="Share.png" alt="Share Icon" style="height: 50px; width: 50px">
                </div>
            </div>
            <div class="instagram-card" style="flex: 1; padding: 10px;">
                <img src="Grid_5.png" alt="Instagram Image 5" style="width: 100%; height: auto;">
            </div>
            <div class="instagram-card" style="flex: 1; padding: 10px;">
                <img src="Grid_6.png" alt="Instagram Image 6" style="width: 100%; height: auto;">
                <div class="save-icon" style="display: flex; justify-content: flex-end; padding-top: 10px; margin-right: -10px;">
                    <img src="Save.png" alt="Save Icon" style="height: 50px; width: 50px">
                </div>
            </div>
        </div>
    </div>
</div>
<footer style="background-color: #044B98; padding: 40px 0; color: #ffffff; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: flex; justify-content: space-between;">
            <!-- Image Section -->
            <div style="flex: 1; max-width: 300px; text-align: left;">
                <img src="Logo.png" alt="Paws Hunger Logo" style="max-width: 200px; height: auto; margin-top: 20px;">
                <!-- Added About Us Paragraph -->
                <p style="margin-top: 20px; line-height: 1.8;">Paws Hunger is a non-profit organization dedicated to providing food and care for animals in need.</p>
            </div>
            <!-- Links and Contacts Section -->
            <div style="flex: 2; display: flex; justify-content: flex-end; align-items: flex-start;">
                <!-- Quick Links Section -->
                <div style="text-align: left; margin-right: 120px;">
                    <h3 style="font-size: 1.5em;">Links</h3>
                    <ul style="list-style: none; padding: 0; margin-top: 15px;">
                        <li style="line-height: 1..1; margin-top: 10px;"><a href="#" style="color: #ffffff; text-decoration: none;">Home</a></li>
                        <li style="line-height: 1.1; margin-top: 10px;"><a href="#" style="color: #ffffff; text-decoration: none;">About Us</a></li>
                        <li style="line-height: 1.1; margin-top: 10px;"><a href="#" style="color: #ffffff; text-decoration: none;">Volunteer</a></li>
                        <li style="line-height: 1.1; margin-top: 10px;"><a href="#" style="color: #ffffff; text-decoration: none;">Adoptions</a></li>
                        <li style="line-height: 1..1; margin-top: 10px;"><a href="#" style="color: #ffffff; text-decoration: none;">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Contact Us Section -->
                <div style="text-align: left; margin-right: 30px;">
                    <h3 style="font-size: 1.5em;">Contact Us</h3>
                    <p style="line-height: 1.1; margin-top: 10px;">Email: info@pawshunger.org</p>
                    <p style="line-height: 1.1; margin-top: 2px;">Phone: +123 456 7890</p> <!-- Further reduced margin-top -->
                    <p style="line-height: 1.1; margin-top: 2px;">Address: 123 Animal Street, City, Country</p> <!-- Further reduced margin-top -->
                </div>

                <!-- Socials Column -->
                <div style="text-align: right;">
                    <h3 style="font-size: 1.5em;">Socials</h3>
                    <a href="https://www.instagram.com/your_instagram_page/" target="_blank">
                        <img src="Insta.png" alt="Instagram Logo" style="height: 30px; width: auto; margin-top: 0.1px; margin-right: 20px;"> <!-- Adjusted height and margin-top -->
                    </a>
                </div>
            </div>
        </div>
        <!-- All Rights Reserved Section -->
        <div style="margin-top: 90px;">
            <p>&copy; 2024 Paws Hunger. All Rights Reserved.</p>
        </div>
    </div>
</footer>







</body>
</html>
