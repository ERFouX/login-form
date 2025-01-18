<html lang="pt-BR">
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
      <form>
        <h1 style="margin-bottom: 30px;">Get OTP Code</h1>
        <span>Enter Your Phone Number To Recive OTP Code</span>
        <input type="text" placeholder="PhoneNumber">
            <button>Send To PhoneNumber</button>
        </form>
    </div>
    <div class="form-container sign-in">
      <form>
        <h1 style="margin-bottom: 30px;">Get OTP Code</h1>
        <span>Enter Your Email Address To Recive OTP Code</span>
        <input type="email" placeholder="Email">
        <button>Send To Email</button>
      </form>
    </div>

    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Register with your Personal details to use all of site features</p>
          <button class="hidden" id="login">Use Email</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Can't get the code via email? Don't worry! Try phone number</p>
          <button class="hidden" id="register">Use PhoneNumber</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./assets/scripts/script.js"></script>
</html>