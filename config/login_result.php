    
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Result</title>
    </head>
    <div class="container mt-5">
        <?php if(isset($_GET['usernotfound'])){?>
            <div class="alert alert-danger">
                <p>Invalid username or password.</p>
            </div>
        <?php }else if(isset($_GET['loginned'])){?>
            <div class="alert alert-success">
                <p>You are Loginned Successfully!</p>
            </div>
        <?php }?>

        <a href="../index.php" class="btn btn-info">Back To Login Form</a>
    </div>