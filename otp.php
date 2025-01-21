<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OTP</title>
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up">
                <form method="POST" action="otp_code_input.php">    
                    <h1 class="mb-25">Get OTP Code</h1>
                    <span>Enter Your Mobile Number To Recive OTP Code</span>
                    <input type="tel" placeholder="Mobile Number" pattern="09\d{9}" title="Please enter a valid 11-digit mobile number starting with 09" required />
                    <button type="submit" name="mobile_otp">Send</button>
                </form>
            </div>
            <div class="form-container sign-in">
                <form method="POST" action="otp_code_input.php">
                    <h1 class="mb-25">Get OTP Code</h1>
                    <span>Enter Your Email Address To Recive OTP Code</span>
                    <input type="email" placeholder="Email Address" required>
                    <button type="submit" name="email_otp">Send</button>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                <div class="toggle-panel toggle-right">
                        <h1>Need Help?</h1>
                        <p>Having trouble receiving the code in your email? Try using your mobile number instead.</p>
                        <button class="hidden" id="register">Use Mobile</button>
                        <a href="index.php" style="color: white;">Back To Login Form</a>
                    </div>
                    <div class="toggle-panel toggle-left">
                        <h1>Need Assistance?</h1>
                        <p>Can't get the code via mobile number? No worries! Try using email address instead.</p>
                        <button class="hidden" id="login">Use Email</button>
                        <a href="index.php" style="color: white;">Back To Login Form</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="./assets/scripts/script.js"></script>
</html>