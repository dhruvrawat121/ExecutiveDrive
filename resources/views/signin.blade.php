<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <style>
        .carousel-container {
            position: relative;
            flex: 1;
            height: 100vh;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
        }

        .carousel-container.bg1 {
            background-image: url('/images/bgImage1.jpg');
        }

        .carousel-container.bg2 {
            background-image: url('/images/bgImage2.jpg');
        }

        .carousel-container.bg3 {
            background-image: url('/images/bgImage3.jpg');
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .signin-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* width: 100%; */
            margin: auto;
            /* max-width: 400px; */
            flex:1;
            text-align: center;
        }

        .signin-container h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        .form-group {
            width: 310px;
            margin: auto;
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-size: 14px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #f2564a;
        }

        .signin-btn {
            width: 322px;
            padding: 10px;
            background-color: #f2564a;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        input {
            width: 300px !important;
            min-width: 300px;
            padding: 4px 8px;
            font-size: 14px;
            border: none;
            /* border-radius: 4px; */
        }
        .signin-btn:hover {
            background-color: #e04537;
        }

        .forgot-password {
            margin-top: 15px;
            font-size: 12px;
            color: #666;
        }

        .forgot-password a {
            color: #f2564a;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <section style="display: flex; width: 100%">
        <div class="signin-container">
            <h2>Sign In</h2>
            <form action="#" style="margin: auto;">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="signin-btn">Sign In</button>
            </form>
            <div class="forgot-password">
                <a href="#">Forgot your password?</a>
            </div>
        </div>
        <div class="carousel-container">
            <div class="overlay-content">
                <!-- <button class="btn">Learn More</button> -->
            </div>
        </div>
    </section>
    <script src="script.js"></script>
    <script src="{{ asset('js/carousel.js') }}" async></script>
</body>

</html>