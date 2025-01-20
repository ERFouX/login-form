<?php
require_once('config/loader.php');
?>

<html lang="EN">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PHP Login Form</title>
        <link rel="stylesheet" href="./assets/css/style.css" />
    </head>

    <body>
        <div class="container" id="container">
            <!-- sign-up -->
            <div class="form-container sign-up">
                <form method="POST" action="config/sign_up.php">
                    <h1 class="mb-30">Create Account</h1>
                    <span>or use your email to registration</span>
                    <input type="text" name="username" placeholder="Username" />
                    <input type="email" name="email" placeholder="Email" />
                    <input type="text" name="mobile" placeholder="Mobile" />
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit" name="signup">Sign Up</button>
                </form>
            </div>

            <!-- sign-in -->
            <div class="form-container sign-in">
                <form method="POST" action="config/sign_in.php">
                    <h1 class="mb-30">Sign In</h1>
                    <span>or use your email/password</span>
                    <input type="text" name="key" placeholder="Email / Username / Mobile" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <a href="#">Forget your Password?</a>
                    <div style="display: inline;">
                        <button type="submit" name="signin">Sign In</button>
                        <a style="margin-left: 15px; color: #512da8;" href="otp.php">Send OTP</a>
                    </div>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Enter your Personal details to use all of site features</p>
                        <button class="hidden" id="login">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Hello, Friend!</h1>
                        <p>Register with your Personal details to use all of site features</p>
                        <button class="hidden" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="./assets/scripts/script.js"></script>
</html>
