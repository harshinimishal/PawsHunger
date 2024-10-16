<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws Hunger - Volunteer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&family=Inria+Serif&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inria Serif', serif; /* Set body text to Inria Serif */
        }
        h1, h2 {
            font-family: 'Saira Condensed', sans-serif; /* Set all headings to Saira Condensed */
        }
        .hidden-form {
            display: none;
        }
        .hover-effect:hover {
            background-color: #044B98;
            color: white;
        }
    </style>
</head>
<body class="bg-blue-50">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-8 md:px-16 flex justify-between items-center">
        <div class="logo flex items-center">
            <img src="Logo.png" alt="Paws Hunger Logo" class="h-16 md:h-20">
            <div class="logo-text ml-4">
                <span class="text-2xl font-bold text-gray-800">Paws</span>
                <span class="text-xl font-bold text-gray-600 sub-text">Hunger</span>
            </div>
        </div>
        <div class="hidden md:flex space-x-8">
    <a href="#" class="text-gray-600 hover:text-[#044B98] font-semibold transition duration-300">About Us</a>
    <a href="Volunteer.php" class="text-gray-600 hover:text-[#044B98] font-semibold transition duration-300">Engage</a>
    <a href="#" class="text-gray-600 hover:text-[#044B98] font-semibold transition duration-300 bg-blue-100 hover:bg-blue-300 hover:text-white rounded-full px-4">Initiatives</a>
    <a href="contact.html" class="text-gray-600 hover:text-[#044B98] font-semibold transition duration-300">Contact</a>
</div>

        <button class="bg-blue-300 hover:bg-blue-400 text-black font-bold py-2 px-6 rounded-full uppercase">Donate</button>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-white overflow-hidden">
        <img src="engage.png" alt="Dog and Cat" class="w-full md:w-full object-cover object-left object-top">
        <div class="absolute inset-0 flex flex-col justify-center items-start text-left p-8 md:p-16">
            <h1 class="text-2xl md:text-4xl font-bold text-gray-800">Feeding Hearts, One Paw at a Time.</h1><br>
            <p class="text-sm md:text-lg text-gray-600 leading-relaxed">Our initiatives are more than actions—they're commitments to every stray's well-being.</p><br>
            <p class="text-xs md:text-lg text-gray-600 leading-relaxed">
                At Paws Hunger, we believe every stray deserves love, care, and nourishment. 
                <br>Our initiatives aim to mobilize communities, inspire individuals, and foster sustainable 
                <br>animal welfare solutions through feeding drives, volunteer incentives, and educational 
                <br>outreach. Together, we strive for a world where no stray goes hungry.
            </p>
        </div>
    </section>

    <!-- Our Initiatives Section -->
    <section class="py-20 bg-white text-gray-700">
        <h2 class="text-center text-5xl font-bold mb-16 text-[#044B98]">Our Initiatives</h2>

        <!-- First Initiative Block - Image Left -->
        <div class="flex flex-col md:flex-row items-center justify-center mb-16 md:space-x-16 p-4 border-l-4 border-[#044B98] bg-blue-50 rounded-lg">
            <img src="initiate.png" alt="Initiative Image" class="w-full md:w-[40%] md:ml-8 rounded-lg shadow-lg">
            <div class="mt-8 md:mt-0 md:ml-16 md:w-1/2 text-left">
                <h3 class="text-xl font-bold text-black">Our initiatives are more than actions—they're commitments to every stray's well-being.</h3>
                <p class="mt-4 leading-relaxed text-black">
                    At Paws Hunger, we believe that every stray deserves love, care, and a full belly. Our initiatives are designed to mobilize communities, inspire individuals, and create sustainable solutions for animal welfare. From feeding drives and volunteer incentives to educational outreach, each initiative reflects our passion and purpose: a world where no stray goes hungry. Join us in our mission and be part of the change!
                </p>
            </div>
        </div>

        <!-- Second Initiative Block - Image Right -->
        <div class="flex flex-col md:flex-row-reverse items-center justify-center mb-16 md:space-x-16 p-4 border-l-4 border-[#044B98] bg-blue-50 rounded-lg">
            <img src="initiate.png" alt="Initiative Image" class="w-full md:w-[40%] md:mr-8 rounded-lg shadow-lg">
            <div class="mt-8 md:mt-0 md:mr-16 md:w-1/2 text-left">
                <h3 class="text-xl font-bold text-black">Our initiatives are more than actions—they're commitments to every stray's well-being.</h3>
                <p class="mt-4 leading-relaxed text-black">
                    At Paws Hunger, we believe that every stray deserves love, care, and a full belly. Our initiatives are designed to mobilize communities, inspire individuals, and create sustainable solutions for animal welfare. From feeding drives and volunteer incentives to educational outreach, each initiative reflects our passion and purpose: a world where no stray goes hungry. Join us in our mission and be part of the change!
                </p>
            </div>
        </div>

        <!-- Third Initiative Block - Image Left -->
        <div class="flex flex-col md:flex-row items-center justify-center mb-16 md:space-x-16 p-4 border-l-4 border-[#044B98] bg-blue-50 rounded-lg">
            <img src="initiate.png" alt="Initiative Image" class="w-full md:w-[40%] md:ml-8 rounded-lg shadow-lg">
            <div class="mt-8 md:mt-0 md:ml-16 md:w-1/2 text-left">
                <h3 class="text-xl font-bold text-black">Our initiatives are more than actions—they're commitments to every stray's well-being.</h3>
                <p class="mt-4 leading-relaxed text-black">
                    At Paws Hunger, we believe that every stray deserves love, care, and a full belly. Our initiatives are designed to mobilize communities, inspire individuals, and create sustainable solutions for animal welfare. From feeding drives and volunteer incentives to educational outreach, each initiative reflects our passion and purpose: a world where no stray goes hungry. Join us in our mission and be part of the change!
                </p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-blue-900 py-8 text-white">
        <div class="max-w-5xl mx-auto px-4 md:px-0">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <!-- Image Section -->
                <div class="flex-1 mb-8 md:mb-0 max-w-xs text-left">
                    <img src="Logo.png" alt="Paws Hunger Logo" class="h-24 w-auto mt-5">
                    <p class="mt-5 leading-relaxed">Paws Hunger is a non-profit organization dedicated to providing food and care for animals in need.</p>
                </div>

                <!-- Links, Contact, Socials Section -->
                <div class="flex flex-col md:flex-row items-center justify-center space-y-8 md:space-y-0 md:space-x-24">
                    <!-- Quick Links Section -->
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">Links</h3>
                        <ul class="mt-3 space-y-2">
                        <li><a href="#" class="text-white hover:text-gray-300 transition duration-300">About us</a></li>
                            <li><a href="#" class="text-white hover:text-gray-300 transition duration-300">Engage</a></li>
                            <li><a href="#" class="text-white hover:text-gray-300 transition duration-300">Initiatives</a></li>
                            <li><a href="#" class="text-white hover:text-gray-300 transition duration-300">Contact</a></li>        
                    </ul>
                    </div>

                    <!-- Contact Us Section -->
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">Contact Us</h3>
                        <div class="mt-3 flex items-center">
                            <img src="location.png" alt="Location Icon" class="h-5 mr-2">
                            <p>Mumbai, MH, India</p>
                        </div>
                        <div class="mt-2 flex items-center">
                            <img src="phone.png" alt="Phone Icon" class="h-5 mr-2">
                            <p>+91 9083254585</p>
                        </div>
                        <div class="mt-2 flex items-center">
                            <img src="mail.png" alt="Email Icon" class="h-5 mr-2">
                            <p>contact@pawshunger.co.in</p>
                        </div>
                    </div>

                    <!-- Socials Section -->
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">Socials</h3>
                        <div class="flex justify-center items-center mt-3">
                            <a href="https://www.instagram.com/your_instagram_page/" target="_blank">
                                <img src="Insta.png" alt="Instagram Logo" class="h-8">
                            </a>
                            <a href="https://www.facebook.com/your_facebook_page/" target="_blank" class="ml-4">
                                <img src="facebook.png" alt="Facebook Logo" class="h-8">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- All Rights Reserved and Terms Section -->
            <div class="mt-16 flex flex-col md:flex-row justify-between items-center">
                <p class="text-center">&copy; 2024 Paws Hunger. All rights reserved.</p>
                <div class="mt-4 md:mt-0">
                    <a href="#" class="text-white hover:text-gray-300  transition duration-300">Terms and Conditions</a> | 
                    <a href="#" class="text-white hover:text-gray-300  transition duration-300">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
