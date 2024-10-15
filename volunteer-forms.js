<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws Hunger - Volunteer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden-form {
            display: none;
        }
    </style>
</head>
<body class="bg-blue-50 font-sans">

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
            <a href="#" class="text-gray-600 hover:text-blue-600 font-semibold">About Us</a>
            <a href="#" class="text-gray-600 hover:text-blue-600 font-semibold">Volunteer</a>
            <a href="#" class="text-gray-600 hover:text-blue-600 font-semibold">Adoptions</a>
            <a href="#" class="text-gray-600 hover:text-blue-600 font-semibold">Contact</a>
        </div>
        <button class="bg-blue-300 hover:bg-blue-400 text-black font-bold py-2 px-6 rounded-full uppercase">Donate</button>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-blue-100 flex flex-col md:flex-row items-center justify-between p-8 md:p-16">
        <div class="space-y-4 max-w-xl">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800">Be the Change for Paws in Need!</h1>
            <p class="text-lg text-gray-600">Your Time. Your Care. Their Happiness.</p>
        </div>
        <img src="header.png" alt="Dog and Cat" class="w-64 md:w-96 mt-8 md:mt-0">
    </section>

    <!-- Donate Section -->
    <section class="bg-white shadow-md p-8 md:p-16 text-center space-y-4">
        <img src="DonateText.png" alt="Donate" class="mx-auto w-48 md:w-56">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
            <img src="qrcode.png" alt="QR Code" class="w-40 md:w-48">
            <div class="text-gray-600 text-left md:pl-10">
                <p><strong>Online Transaction:</strong> 8777******</p>
                <p><strong>For Any other queries:</strong></p>
                <img src="queries.png" alt="Queries" class="mt-4 w-32 md:w-40">
            </div>
        </div>
    </section>

    <!-- Volunteer Section -->
    <section class="py-10 bg-white">
        <h2 class="text-3xl font-bold text-center text-gray-800">Volunteer</h2>
        <div class="flex flex-wrap justify-center gap-6 mt-10 max-w-7xl mx-auto">

            <!-- Volunteer Cards -->
            <div class="volunteer-card bg-white shadow-md p-6 rounded-lg text-center w-64">
                <h3 class="font-bold text-xl text-gray-800">Feeding Volunteer</h3>
                <p class="text-gray-600 mt-4">Join our team in providing food to strays, ensuring every stray is well-fed and promoting a healthier environment for these animals.</p>
                <img src="paw.png" alt="Paw Icon" class="w-16 mx-auto cursor-pointer mt-4" onclick="showGoogleForm('form1')">
            </div>

            <div class="volunteer-card bg-white shadow-md p-6 rounded-lg text-center w-64">
                <h3 class="font-bold text-xl text-gray-800">General Volunteer</h3>
                <p class="text-gray-600 mt-4">Assist in organizing events, helping with shelter management, and supporting the daily operations of our NGO.</p>
                <img src="paw.png" alt="Paw Icon" class="w-16 mx-auto cursor-pointer mt-4" onclick="showGoogleForm('form2')">
            </div>

            <div class="volunteer-card bg-white shadow-md p-6 rounded-lg text-center w-64">
                <h3 class="font-bold text-xl text-gray-800">Rabies Vaccination Drive</h3>
                <p class="text-gray-600 mt-4">Help us protect strays by organizing and executing vaccination drives to ensure the safety of the animals and the public.</p>
                <img src="paw.png" alt="Paw Icon" class="w-16 mx-auto cursor-pointer mt-4" onclick="showGoogleForm('form3')">
            </div>

            <div class="volunteer-card bg-white shadow-md p-6 rounded-lg text-center w-64">
                <h3 class="font-bold text-xl text-gray-800">PR & Creatives</h3>
                <p class="text-gray-600 mt-4">Help raise awareness by creating content, managing social media, and engaging in other PR activities for Paws Hunger.</p>
                <img src="paw.png" alt="Paw Icon" class="w-16 mx-auto cursor-pointer mt-4" onclick="showGoogleForm('form4')">
            </div>

        </div>
    </section>

    <!-- Hidden Google Form Section -->
    <section id="google-form-section" class="py-10 bg-white hidden-form">
        <h2 class="text-3xl font-bold text-center text-gray-800">Volunteer Signup Form</h2>
        <div class="mt-8 mx-auto max-w-5xl">
            <iframe id="google-form" src="" width="100%" height="1200" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-blue-900 py-10 text-white">
        <div class="max-w-6xl mx-auto px-4 md:px-0">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <!-- Logo and Description Section -->
                <div class="flex-1 mb-8 md:mb-0 max-w-xs text-left">
                    <img src="Logo.png" alt="Paws Hunger Logo" class="h-24 w-auto mt-5">
                    <p class="mt-5 leading-relaxed">Paws Hunger is a non-profit organization dedicated to providing food and care for animals in need.</p>
                </div>

                <!-- Links and Contact Section -->
                <div class="flex flex-col md:flex-row items-start md:items-center space-y-8 md:space-y-0 md:space-x-24">
                    <!-- Quick Links -->
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">Links</h3>
                        <ul class="mt-4 space-y-3">
                            <li><a href="#" class="text-white hover:underline">Home</a></li>
                            <li><a href="#" class="text-white hover:underline">About Us</a></li>
                            <li><a href="#" class="text-white hover:underline">Volunteer</a></li>
                            <li><a href="#" class="text-white hover:underline">Adoptions</a></li>
                            <li><a href="#" class="text-white hover:underline">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Contact Us -->
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">Contact Us</h3>
                        <p class="mt-4">Email: info@pawshunger.org</p>
                        <p class="mt-2">Phone: +123 456 7890</p>
                        <p class="mt-2">Address: 123 Animal Street, City, Country</p>
                    </div>

                    <!-- Social Media -->
                    <div class="text-left">
                        <h3 class="text-xl font-semibold">Socials</h3>
                        <a href="https://www.instagram.com/your_instagram_page/" target="_blank">
                            <img src="Insta.png" alt="Instagram Logo" class="h-8 mt-1">
                        </a>
                        <a href="https://www.facebook.com/your_facebook_page/" target="_blank" class="ml-4">
                            <img src="facebook.png" alt="Facebook Logo" class="h-8 mt-1">
                        </a>
                    </div>
                </div>
            </div>
            <!-- All Rights Reserved Section -->
            <div class="mt-12 text-center">
                <p>&copy; 2024 Paws Hunger. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Google Form Script -->
    <script>
        function showGoogleForm(form) {
            const forms = {
                form1: "https://docs.google.com/forms/d/e/1FAIpQLScuAER_hx1dZAM9x2M9ZCEXaULyYjQ4Bb57u2G49hMyD3QHPA/viewform",
                form2: "https://docs.google.com/forms/d/e/1FAIpQLSe0GAsw_i9O5H4pQsSDSfAHE6TWzIqj_pK1v6MwAzjK5hBW9w/viewform",
                form3: "https://docs.google.com/forms/d/e/1FAIpQLSeZrUKn9q6MgBuGQY-R8UHwU_Jk8KCKp8Sc9KUDGmfV-17xqg/viewform",
                form4: "https://docs.google.com/forms/d/e/1FAIpQLSeYHk7kH6Gx2nHqNDzTOEVfH3XKpQF50TpqztkdCC1zdrqNDA/viewform"
            };
            document.getElementById("google-form").src = forms[form];
            document.getElementById("google-form-section").classList.remove("hidden-form");
        }
    </script>
</body>
</html>
