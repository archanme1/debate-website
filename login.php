<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/login.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/normalize.css" />
    <script src="./jquery/jquery.js"></script>
    <script src="./jquery/jquery-ui.js"></script>

    <script>
        $(document).ready(function () {
            // For Create form viewing and hiding
            $("#create-account").click(function () {
                $('.create-account').show("slide")
            });
            $("#create-account").click(function () {
                $('.container').hide("slide")
            })
            // for login form viewing and hiding
            $("#login-back").click(function () {
                $('.container').show("slide")
            });
            $("#login-back").click(function () {
                $('.create-account').hide("slide")
            })
            // for email 
            $("#with-email").click(function(){
                $('.login-form').hide("fade")
                
            })
            $("#with-email").click(function(){
                $('.log-email').show("fold")
                
            })
            $("#go-back-login").click(function(){
                $('.create-account').show("fold")
                
            })
        })

    </script>

</head>

<body>
    
    <div class="login-form">
        <div class="container">
            <div class="container-left">
                <!-- Top section -->
                <h1>Debate</h1>
                <h2>Login to continue</h2>
                <button id="fb-login-btn">Login with Facebook</button><br>
                <p id="with-email"class="form-links">OR WITH E-MAIL</p>
                <!-- Forms section -->
                <form>
                    <div class="form-input">
                        <input class="login-input" type="email" class="form-links" placeholder="Enter e-mail here" /><br>
                        <input class="login-input" type="password" placeholder="Enter password here" /><br>
                    </div>
                    <div class="lower-form" style="margin:10px">
                        <input id="checkbox--remember-me" type="checkbox" name="rememberMe" value="Remember Me">
                        <label for="checkbox--remember-me" style="width:140px; margin-left:-1rem;">
                            Remember Me
                        </label>
                        <a href="#" id="forgot-password" class="form-links">Forgot Password?</a><br>
                    </div>
                    <button class="form-login-btn" type="submit"> Login</button><br>
                    <div style="margin:5px;">
                        <p id="create-account" class="form-links">Create an account</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="create-account" style="display:none;">
        <div id="logo">
            <img src="./images/icons8_Logo_50px.png">
        </div>
        <h2>Create a new account</h2>
        <div class="create-form-div">
            <form class="create-form">
                <input type="text" placeholder="Username"><br>
                <input type="email" placeholder="E-mail"><br>
                <input type="password" placeholder="Password"><br>
                <input type="password" placeholder="Retype the password"><br>

                <input id="agree-terms" type="checkbox" name="agreeterms" value="Agree terms">
                <label for="agree-terms" style="width:400px; margin-left:-1rem; margin:5px;">
                    Agree our Terms and Conditions
                </label>
                <button type="submit">Create</button>
            </form>
            <button id="login-back">Have an account? Login Instead</button>
        </div>
    </div>

    <!-- Login with email -->

    <div class="log-email"  style="display:none;">
        <form class="log-email--form">
                <input type="email" placeholder="Enter the email you wanna continue with."><br>
                <button type="submit">Continue</button>
                <button id="go-back-login">Go back</button>
        </form>
    </div>
</body>

</html>