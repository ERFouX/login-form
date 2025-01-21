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
        <title>Login Result</title>
        <link rel="stylesheet" href="../assets/css/style.css" />
    </head>

    <body>
        <div class="container" id="container">
            <div class="otp-container">
                <form>
                    <?php if(isset($_GET['usernotfound'])){?>
                        <div class="alert alert-danger">
                            <h1>Invalid username or password.</h1>
                        </div>
                    <?php }else if(isset($_GET['loginned'])){?>
                        <div class="alert alert-success">
                            <h1>You are Loginned Successfully!</h1>
                        </div>
                    <?php }else if(isset($_GET['account_created'])){?>
                        <div class="alert alert-info">
                            <h1>Your Account Created Successfully</h1>
                        </div>
                    <?php } else{ header ("Location: ../index.php"); }?>

                    <button>
                        <a href="../index.php" style="color:white;">Back To Login Form</a>
                    </button>
                </form>
            </div>
        </div>
    </body>
    <script src="./assets/scripts/script.js"></script>
</html>