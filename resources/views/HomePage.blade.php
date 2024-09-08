<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" defer></script>
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General Table and Row Alignment */


        body {
            font-family: 'Poppins';
            /* background-color: #f4f4f4; */
        }

        .main-container {
            display: flex;
            justify-content: center;
            height: 100vh;
        }

        .booking_Container {
            display: flex;
            flex: 1;
            flex-direction: column;
        }

        /* Navbar Styling */
        .navbar {
            padding: 2rem 3rem;
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            color: #ffd966;
            font-size: 1.5rem;
            text-decoration: none;
        }

        /* Toggler Styling */
        .navbar-toggler {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 25px;
            height: 20px;
            cursor: pointer;
        }

        .navbar-icon {
            width: 100%;
            height: 3px;
            background-color: #fff;
        }

        /* Navbar Menu */
        .navbar-menu {
            display: flex;
            align-items: center;
        }

        .navbar-nav {
            list-style: none;
            display: flex;
        }

        .navbar-nav li {
            margin-left: 20px;
        }

        .nav-link {
            color: #1A1E25;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #ffd966;
        }

        .carousel-container {
            position: relative;
            flex: 1;
            height: 100vh;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
        }

        /* Overlay Content */
        .overlay-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .overlay-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .overlay-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Predefined Background Images */
        .carousel-container.bg1 {
            background-image: url('/images/bgImage1.jpg');
        }

        .carousel-container.bg2 {
            background-image: url('/images/bgImage2.jpg');
        }

        .carousel-container.bg3 {
            background-image: url('/images/bgImage3.jpg');
        }

        .booking_section {
            /* height: 100vh; */
            display: flex;
            margin: auto;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .book_heading {
            font-size: 25px;
            font-weight: 600;
            padding: 20px 0px;
        }

        /* table {
            background-color: #fff;
            box-shadow: rgba(0, 0, 0, 0.5) 2px 8px 25px;
            padding: 1rem;
            border-radius: 10px;
            width: 90%;
        } */

        tr {
            display: flex;
        }

        /* label {
            font-size: 13px;
            display: block;
            font-weight: 500;
            opacity: 0.8;
            margin-bottom: 2px;
        } */

        /* input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        } */

        .form-group {
            margin-bottom: 5px;
            /* display: flex; */
            /* flex-direction: column; */
            justify-content: center;
        }

        label {
            font-size: 13px;
            display: block;
        }

        input {
            width: 300px;
            min-width: 300px;
            padding: 4px 8px;
            font-size: 14px;
            border: none;
            /* border-radius: 4px; */
        }

        input:focus {
            outline: none;
            /* Remove outline */
            border: none;
            /* Remove border */
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            /* display: flex; */
            align-items: center;
            /* Border between rows */
        }

        table {
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.5) 2px 5px 15px;
            border-collapse: separate;
            /* Allows for rounded corners */
            border-spacing: 0;
            /* Ensures no gaps between cells */
            border: 2px solid #ccc;
            /* Adds a border around the table */
            border-radius: 10px;
            /* Rounds the corners */
        }

        td:first-child {
            border-right: 1px solid #ccc;
        }

        td:last-child {
            border-right: none;
            /* No right border on the last column */
        }

        tr:last-child td {
            border-bottom: none;
            /* Remove bottom border for the last row */
        }

        /* Adding specific border-radius for the corners */
        table tr:first-child td:first-child {
            border-top-left-radius: 10px;
            /* Top-left corner */
        }

        table tr:first-child td:last-child {
            border-top-right-radius: 10px;
            /* Top-right corner */
        }

        table tr:last-child td:first-child {
            border-bottom-left-radius: 10px;
            /* Bottom-left corner */
        }

        table tr:last-child td:last-child {
            border-bottom-right-radius: 10px;
            /* Bottom-right corner */
        }

        /* input[type="time"]::-webkit-calendar-picker-indicator {
            display: none;
            -webkit-appearance: none;
        } */
        footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .social-links {
            list-style-type: none;
            display: flex;
            gap: 15px;
        }

        .social-links li {
            display: inline;
        }

        .social-links li a {
            text-decoration: none;
            font-size: 18px;
        }

        .social-links li a:hover {
            color: #ffd966;
        }

        .copyright {
            text-align: right;
            font-size: 14px;
            color: #1A1E25
        }

        .sectionabout {
            /* height: 100vh; */
            display: flex;
            flex-direction: column;
        }

        .div1 {
            background-image: url('/images/pexels-tdcat-70912.jpg');
            /* flex: 1; */
            height: 450px;
            background-position-y: 15%;
            background-size: cover;
            background-position: center;
            position: relative;

        }

        .div2 {
            /* flex: 1; */
            display: flex;
            justify-content: end;
            /* background: url('/images/swiggly.png'); */
            background-position: end;
            background-size: contain;
            background-repeat: no-repeat;
            background-color: #FFF;
            height: 450px;
        }

        .carousel {
            height: 100px;
            background-color: #ffd966;
        }

        .carousel-track {
            display: flex;
            height: 100px;
            justify-content: space-around;
        }

        .card {
            background-color: #464859;
            /* Greyish background color */
            border-radius: 15px;
            /* Rounded corners */
            padding: 30px;
            /* Space inside the card */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Shadow for a subtle 3D effect */
            max-width: 500px;
            /* Set a max-width for the card */
            margin: 2%;
            margin-right: 16%;
            height: fit-content;
            /* Center the card horizontally */
        }

        .card-heading {
            font-size: 1.5rem;
            /* Heading font size */
            color: #FFF;
            font-family: 'Poppins';
            /* Darker text color for the heading */
            /* Space below the heading */
        }

        .card-description,
        .card-description-about {
            font-size: 14px;
            /* Description font size */
            color: #FFF;
            opacity: 0.6;
            /* Lighter text color for the description */
            line-height: 1.5;
            /* Line height for better readability */
            margin: 35px 0px;
        }

        .card-description-about {
            color: #1A1E25;
            opacity: 1;
        }

        .custom-button,
        .custom-button-about {
            width: 200px;
            /* Set the button width */
            background-color: #ffd966;
            /* Button background color */
            color: #464859;
            /* Button text color */
            border: none;
            /* Remove the default border */
            padding: 10px;
            /* Add some padding inside the button */
            border-radius: 5px;
            /* Slightly rounded corners */
            font-size: 14px;
            /* Font size for the button text */
            cursor: pointer;
            /* Show a pointer cursor on hover */
            transition: background-color 0.3s ease;
            /* Smooth background color transition */
        }

        .custom-button-about {
            background-color: #464859;
            color: #FFF;
        }

        .custom-button:hover {
            background-color: #d1a82a;
            /* Slightly darker color on hover */
        }

        .aboutDriveExce {
            position: absolute;
            background-color: #ffd966;
            /* Greyish background color */
            border-radius: 15px;
            /* Rounded corners */
            padding: 30px;
            /* Space inside the card */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Shadow for a subtle 3D effect */
            max-width: 500px;
            /* Set a max-width for the card */
            margin: 2%;
            margin-left: 16%;
            bottom: -40%;
        }

        /* General Styling */
        .services-section {
            /* width: 80%;
            max-width: 1200px; */
            margin: auto;
            height: 100vh;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 2%;
            justify-content: center;
            align-items: center;
        }

        .main-heading {
            font-size: 2.5rem;
            /* margin-bottom: 40px; */
            color: #333;
        }

        .service {
            display: flex;
            align-items: flex-start;
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            /* border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        }

        .service-icon {
            margin-right: 20px;
        }

        .service-title {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin: 0;
            text-align: left;
        }

        .service-description,
        .service-description_hiw {
            font-size: 13px;
            color: #666;
            margin-top: 8px;
            text-align: left;
        }

        .service-description_hiw {
            font-size: 14px;
            font-weight: 500;
        }

        .footerMain {
            display: flex;
            width: 100%;
            padding: 10%;
            flex-direction: column;
            background-color: #1A1E25;
            color: white;
            font-family: Arial, sans-serif;
        }

        .footer-top {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #444;
            margin-bottom: 20px;
        }

        .company-info {
            display: flex;
            align-items: center;
        }

        .company-logo {
            width: 50px;
            height: auto;
            margin-right: 15px;
        }

        .company-name {
            font-size: 1.5rem;
            letter-spacing: 8px;
            text-transform: uppercase;
        }

        .payment-methods {
            display: flex;
            align-items: center;
        }

        .payment-icon {
            width: 50px;
            height: auto;
            margin-left: 15px;
        }

        .footer-bottom {
            display: flex;
            width: 100%;
            justify-content: space-between;
        }

        .footer-column {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-right: 20px;
        }

        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .footer-column p,
        .footer-column a {
            color: #ccc;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .footer-column a:hover {
            color: #ffd966;
        }

        .subscribe-section .subscribe-form {
            display: flex;
            flex-direction: column;
        }

        .subscribe-input {
            padding: 22px 10px;
            border-radius: 5px;
            border: none;
            margin-bottom: 10px;
            font-size: 1rem;
            background-color: #444;
            margin: 5% 0px;
        }

        .subscribe-button {
            background-color: #ffd966;
            width: 150px;
            color: #1A1E25;
            border: none;
            padding: 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .subscribe-button:hover {
            background-color: #e04537;
        }

        /* Make the layout responsive */
        @media (max-width: 768px) {
            .footer-bottom {
                flex-direction: column;
            }

            .footer-column {
                margin-right: 0;
                margin-bottom: 20px;
            }
        }

        .heading_footer {
            font-size: 16px !important;
            font-weight: 500;
        }

        .footer_links {
            font-size: 13px;
            text-decoration: underline !important;
        }

        /* Make the layout responsive */
        @media (max-width: 768px) {
            .service {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .service-icon {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

        /* Responsive Design for Mobile */
        @media (max-width: 768px) {
            .navbar-toggler {
                display: flex;
            }

            .navbar-menu {
                display: none;
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
                /* background-color: #333; */
                position: absolute;
                top: 100%;
                left: 0;
                padding: 1rem 2rem;
            }

            .navbar-menu.active {
                display: flex;
            }

            .navbar-nav {
                flex-direction: column;
                width: 100%;
            }

            .navbar-nav li {
                display: flex;
                gap: 5px;
                margin: 10px 0;
            }

            .nav-link {
                width: 100%;
                padding: 10px 0;
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <section class="main-container">
        <div class="booking_Container">
            <nav class="navbar">
                <div class="navbar-container">
                    <a href="#" class="navbar-brand">Executive Drive</a>
                    <button class="navbar-toggler" id="navbar-toggler">
                        <span class="navbar-icon"></span>
                        <span class="navbar-icon"></span>
                        <span class="navbar-icon"></span>
                    </button>
                    <div class="navbar-menu" id="navbar-menu">
                        <ul class="navbar-nav">
                            <li>
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <a href="#" class="nav-link">Find a Ride</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-car"></i>
                                <a href="#" class="nav-link">Offer a Ride</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-newspaper"></i>
                                <a href="#" class="nav-link">News</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-question"></i>
                                <a href="#" class="nav-link">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="booking_section">
                <p class="book_heading">Where do you want to go?</p>
                <!-- <div class="source_Dest_container"> -->
                <table>
                    <tr>
                        <td>
                            <!-- <div>
                                <i class="fa-solid fa-location-dot"></i>
                            </div> -->
                            <div class="form-group">
                                <label for="addressFrom">From</label>
                                <input type="text" id="from" name="addressFrom" placeholder="Address, airpot, hotel..">
                            </div>
                        </td>
                        <td>
                            <label for="to">To:</label>
                            <input type="text" id="to" name="to" placeholder="Address, airport, hotel...">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="time">Time:</label>
                            <input type="time" id="time" name="time">
                        </td>
                        <td>
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date">
                        </td>
                    </tr>
                </table>
                <!-- <table>
                        <tr>
                            <td>
                                <div>
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="form-group">
                                    <label for="addressFrom">From</label>
                                    <input type="text" id="from" name="addressFrom" placeholder="Address, airpot, hotel..">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="form-group">
                                    <label for="addressTo">To</label>
                                    <input type="text" id="to" name="addressTo" placeholder="Address, airpot, hotel..">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="time" id="time" name="time" placeholder="Select Time" />
                                </div>
                            </td>
                            <td>
                                <div>
                                    <i class="fa-solid fa-calendar"></i>
                                </div>
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" id="date-picker" name="date" placeholder="Select Date" />
                                </div>
                            </td>
                        </tr>
                    </table> -->
                <!-- </div> -->
            </div>
            <footer>
                <ul class="social-links">
                    <li><a href="https://www.facebook.com" target="_blank" style="color: #1A1E25"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://www.twitter.com" target="_blank" style="color: #1A1E25"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com" target="_blank" style="color: #1A1E25"><i class="fa-brands fa-instagram"></i></a></li>
                    <!-- <li><a href="https://www.linkedin.com" target="_blank">LinkedIn</a></li> -->
                    <li><a href="https://www.youtube.com" target="_blank" style="color: #1A1E25"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
                <div class="copyright">
                    &copy; 2024 All Rights Reserved
                </div>
            </footer>
        </div>
        <div class="carousel-container">
            <div class="overlay-content">
                <!-- <button class="btn">Learn More</button> -->
            </div>
        </div>
    </section>

    <!-- section 2 -->
    <section class="sectionabout">
        <div class="carousel">
            <div class="carousel-track">
                <img src="./images/expedia__inc__logo.svg" alt="Expedia" class="img1">
                <img src="./images/cec05a890ea942b3cd3f946f2e2c6433.svg" alt="Image 2" class="img1">
                <img src="./images/png-clipart-capital-one-arena-logo-credit-card-organization-credit-card-text-business.svg" class="img1" style="height: 110px; width: 110px" alt="Image 3">
                <img src="./images/22.svg" alt="Image 4" style="height: 110px; width: 110px" class="img1">
                <img src="./images/giphy.svg" alt="Image 5" style="height: 110px; width: 110px" class="img1">
            </div>
        </div>
        <div class="div1">
            <div class="aboutDriveExce">
                <h2 class="card-heading-about">About Drive Executive</h2>
                <p class="card-description-about">
                    Based in UK, meeting the needs of out valued client. Have been in industry for more than 20 years, have established a name for our reliabilities and efficient service.
                    We constantly seek to provide client satisfaction as one of out main goals.
                </p>
                <button class="custom-button-about">Get in touch with us</button>

            </div>
        </div>
        <div class="div2">
            <div class="card">
                <h2 class="card-heading">Our Mission</h2>
                <p class="card-description">
                    Redefine luxury transportation with unparalleled service, ensuring every journey is safe, comfortable, and unforgettable.
                    We're committed to exceeding expectations and being the preferred choice for discerning individuals seeking premium chauffeur services.
                </p>
                <button class="custom-button">Read More</button>

            </div>

        </div>
    </section>
    <!-- Section 3 -->
    <section class="services-section">
        <div style="display: flex; justify-content: center; flex-direction: column; align-items:center;">
            <h1 class="main-heading">Our Services</h1>
            <hr style="width: 70px; height: 2px; background-color: #ffd966; border: none; border-radius: 5px;" />
        </div>
        <div style="display: flex; padding: 2% 8% ; justify-content: space-around; gap: 4%">
            <div class="service">
                <div class="service-icon">
                    <!-- Example SVG icon -->
                    <i class="fa-solid fa-car"></i>
                </div>
                <div class="service-content">
                    <h3 class="service-title">City-to-City rides</h3>
                    <p class="service-description">Seamless transportation between cities, offering comfort and convenience for travelers.</p>
                </div>
            </div>

            <div class="service">
                <div class="service-icon">
                    <!-- Example SVG icon -->
                    <i class="fa-solid fa-plane-up"></i>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Airport Transfer</h3>
                    <p class="service-description">Swift and reliable transport from to and from airport, ensuring punctuality and peace for mind for passengers.</p>
                </div>
            </div>

            <div class="service">
                <div class="service-icon">
                    <!-- Example SVG icon -->
                    <i class="fa-solid fa-calendar"></i>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Event Transfer</h3>
                    <p class="service-description">Specialised transportation for events, ensuring smooth arrivals and departure with a touch of luxury and professionalism.</p>
                </div>
            </div>

            <div class="service">
                <div class="service-icon">
                    <!-- Example SVG icon -->
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="service-content">
                    <h5 class="service-title">Executive Transfer</h5>
                    <p class="service-description">Premium chaffeur services tailored for executives, providing a seamless travel experience with utmost comfort and discretion.</p>
                </div>
            </div>
        </div>

    </section>
    <!-- Section 4 -->

    <section>
        <p style="color:#666; font-size: 50px; font-weight: 600; text-align: center;">
            City-to-City
        </p>
        <p style="color:#666; font-size: 60px; font-weight: 600; text-align: center; background: linear-gradient(45deg, #f2564a, #ffd966); -webkit-background-clip: text; color: transparent;">
            Tour
        </p>
        <div style="width: 100%; height: 400px; background: url('/images/pexels-tdcat-70912.jpg') no-repeat center center; background-size: contain;">
        </div>
    </section>

    <!-- section 5 -->
    <section class="services-section">
        <div style="display: flex; justify-content: center; flex-direction: column; align-items:center;">
            <h1 class="main-heading">How it Works</h1>
            <hr style="width: 70px; height: 2px; background-color: #ffd966; border: none; border-radius: 5px;" />
        </div>
        <div style="display: flex; padding: 2% 8% ; justify-content: space-around; gap: 4%">
            <div class="service" style="flex-direction: column;">
                <div class="service-icon">
                    <!-- Example SVG icon -->
                    <i class="fa-solid fa-car" style="font-size: 40px; color: #F27369;margin-bottom: 15px"></i>
                </div>
                <div class="service-content">
                    <p class="service-description_hiw">Use our online booking system to select meeting place, date and time.</p>
                </div>
            </div>

            <div class="service" style="flex-direction: column;">
                <div class="service-icon">
                    <!-- Example SVG icon -->
                    <i class="fa-solid fa-plane-up" style="font-size: 40px; color: #F27369;margin-bottom: 15px"></i>
                </div>
                <div class="service-content">
                    <p class="service-description_hiw">Select the best luxry vehicle for your comfort with drive executive.</p>
                </div>
            </div>

            <div class="service" style="flex-direction: column;">
                <div class="service-icon">
                    <!-- Example SVG icon -->
                    <i class="fa-solid fa-credit-card" style="font-size: 40px; color: #F27369;margin-bottom: 15px"></i>
                </div>
                <div class="service-content">
                    <p class="service-description_hiw">Make online payment accept all type of credit & debit cards</p>
                </div>
            </div>

            <div class="service" style="flex-direction: column;">
                <div class="service-icon">
                    <!-- Example SVG icon -->
                    <i class="fa-solid fa-receipt" style="font-size: 40px; color: #F27369;margin-bottom: 15px"></i>

                </div>
                <div class="service-content">
                    <p class="service-description_hiw">You will get invoice, driver details and ride details in your email.</p>
                </div>
            </div>
        </div>

    </section>

    <!-- Section 6 Our Chafferur -->
    <section style="padding: 10%;">
        <p style="color:#1A1E25; font-size: 50px; font-weight: 600; text-align: center;padding: 4% 10px">
            Our Chauffeurs
        </p>
        <div class="" style="display: flex; gap: 2%; margin: auto">
            <div style="    flex: 1;
                            display: flex;  
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;">
                <div>
                    <span>
                        Our Chauffeurs
                    </span>
                    &nbsp;
                    <span>
                        epitomize excellence, embodying professionalism, courtesy, and
                        expertise at every turn of the wheel. With meticulous training and a dedication to
                        service, they are the ambassadors of our commitment to luxury transportation.
                        Beyond simply driving, they curate experiences, ensuring each journey is not just a
                        ride but a seamless fusion of comfort, safety, and personalized attention.
                    </span>
                </div>
                <div>
                    <p>
                        From navigating bustling city streets to providing discreet and attentive
                        service, our chauffeurs redefine luxury travel, setting the standard for
                        sophistication and reliability. With every interaction, they exude warmth and
                        professionalism, ensuring our clients arrive at their destination feeling not just
                        transported, but truly cared for."
                    </p>
                </div>
            </div>
            <div style="flex: 1;width: 100%; height: 400px; background: url('/images/pexels-tdcat-70912.jpg') no-repeat center center; background-size: contain;">

            </div>
        </div>
    </section>

    <!-- Foooter -->
    <footer class="footerMain">
        <!-- First Row: Company Logo and Payment Icons -->
        <div class="footer-top">
            <div class="company-info">
                <img src="./images/22.svg" alt="Company Logo" class="company-logo">
                <span>
                    <span class="company-name">Your drive Executive</span>
                    <p style="text-transform: uppercase; font-weight:500;font-size: 35px; letter-spacing: 4px">Chaffeur</p>
                </span>

            </div>
            <div class="payment-methods">
                <img src="./images/American_Express_logo_(2018).svg" alt="American Express" class="payment-icon" style="width: 50px; height: 40px">
                <img src="./images/Old_Visa_Logo.png" alt="MasterCard" class="payment-icon" style="width: 50px; height: 40px">
                <img src="./images/masterCard.png" alt="Visa" class="payment-icon" style="width: 50px; height: 40px">

            </div>
        </div>

        <!-- Second Row: Multiple Columns -->
        <div class="footer-bottom">
            <!-- First child: Email and Mobile -->
            <ul class="footer-column">
                <h3 class="heading_footer">Contact Us</h3>
                <a href="#" class="footer_links">Email: info@driverexecutive.co.uk</a>
                <a href="#" class="footer_links">Mobile: 020 39301090</a>
            </ul>

            <!-- Second child: Three elements in column -->
            <ul class="footer-column">
                <h3 class="heading_footer">Services</h3>
                <a href="#" class="footer_links">About Us</a>
                <a href="#" class="footer_links">Get a Quote</a>
                <a href="#" class="footer_links">FAQs</a>
            </ul>

            <!-- Third child: Five anchor links in column -->
            <div class="footer-column">
                <h3 class="heading_footer">Our Company</h3>
                <a href="#" class="footer_links">Home</a>
                <a href="#" class="footer_links">About Us</a>
                <a href="#" class="footer_links">Services</a>
                <a href="#" class="footer_links">Top Cities</a>
                <a href="#" class="footer_links">Our Chauffeurs</a>
            </div>

            <!-- Fourth child: Subscribe form -->
            <div class="footer-column subscribe-section">
                <h3 class="heading_footer">Join Us Now!</h3>
                <form class="subscribe-form">
                    <input type="email" placeholder="Enter your email" class="subscribe-input">
                    <button type="submit" class="subscribe-button">Subscribe</button>
                </form>
                <div>
                    <img src="" />
                    <img src="" />
                    <img src="" />
                    <img src="" />
                </div>
            </div>
        </div>
    </footer>

    </div>
    <script src="script.js"></script>
    <script src="{{ asset('js/carousel.js') }}" async></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#date-picker", {
            dateFormat: "Y-m-d", // Custom date format
            minDate: "today", // Disable past dates
            maxDate: new Date().fp_incr(30) // 2 weeks from now
        });
    </script>
</body>

</html>