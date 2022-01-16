<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix login page</title>
    <link rel="stylesheet" href="CSS/signin.css">
</head>
<body>
    <header class = "header">
        <div class="showcase-head"> <!--Phần background-->
            <img src="Image/background.jpg" alt="Netflix Background" class="fit">
        </div>
        <div class="logo">
                <a href="#"><img src="Image/netflixlogo.png" alt="logo" srcset=""></a>
        </div>
    </header>
    <div class="wrapper">
        <div class="login__body">
            <div class="login__box">
                <h2>Sign in</h2>
                <form class="form-signin" action = "process-signin.php" method = "post">
                    <div class="input__wrap">
                        <input type="email" name = "txtEmail" placeholder="Email or username" required autofocus>
                    </div>
                    <div class="input__wrap">
                        <input type="password" name = "txtPass" placeholder="Password" required >
                    </div>
                    <div class="input__wrap">
                        <button type="submit" name = "btnSignIn ">Sign in</button>
                    </div>
                    <div class="support">
                        <div class="remember">
                            <span> <input type="checkbox"></span>
                            <span>Remember me</span>
                        </div>
                        <div class="need__help">
                            Need help ?
                        </div>
                      
                    </div>
                    <div class="login__footer">
                        <div class="login__facebook">
                            <span><img src="Image/fb icon.png" alt="fb"></span>
                            <span><a href="#">Login with Facebook</a></span>
                        </div>
                        <div class="sign__up">
                            <p>New to Netflix? <a href="signup.php">Sign up now.</a></p>
                        </div>
                        <div class="terms">
                            <p>This page is protected by Google reCAPTCHA to make sure you're not a robot <a href="#">Learn more.</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
   
    </div>
</body>
</html>