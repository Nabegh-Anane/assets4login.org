<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CFXGroup - Recap Password</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="57x57" href="./assetspassword/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assetspassword/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assetspassword/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assetspassword/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assetspassword/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assetspassword/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assetspassword/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assetspassword/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assetspassword/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./assetspassword/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assetspassword/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assetspassword/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assetspassword/images/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="canonical" href="./forgot-password" />
    <link rel="stylesheet" href="./assetspassword/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./assetspassword/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./assetspassword/jquery.tf.css" type="text/css" rel="stylesheet">
    <link href="./assetspassword/stylesheet.css" rel="stylesheet">
    <link href="./assetspassword/main.min.css?v=15" rel="stylesheet">

    <style>
        .login .login-form {
            position: relative;
            max-width: 90%;
            width: 486px;
            top: 0;
            left: 0;
            transform: none;
            background: #8abc57;
            border-radius: 33px;
            box-shadow: 0 10px 12px hsla(0, 0%, 100%, .2);
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

    <link rel="stylesheet" href="./assetspasswordpassword/main.min.css">

    <link href="./assetspassword/custom-styles.css" rel="stylesheet">


    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">


    <link href="./assetspassword/bootstrap-pincode-input.css" rel="stylesheet">
    <style>
        .bootbox {
            color: black;
        }

        .pincode-input-container input {
            text-align: center;
        }
    </style>
</head>

<body class="login  d-flex justify-content-center align-items-center container" style="background-image: url('assetslogin/img/login-bg.jpg');">
    <center>
	<form id="recoverPassword" class="login-form text-center">
        <center>
		<div class="logo"><a href="/"><img src="./assetspassword/img/cfx-silver-logo.png"></a></div>
        <h4>Forgot password</h4>
        <input type="hidden" name="captcha" id="captcha" />
        <div class="input-group">
            <input type="text" name="email" id="email" class="form-control" placeholder="Email address">
        </div>
        <div id='recaptcha' class="g-recaptcha" data-sitekey="6Lfc7MUUAAAAALo0lnPqeiOUBTeTdFPC3y2GNLi6" data-callback='submitRecoveryPass' data-error-callback="onRecaptchaError" data-size="invisible">
        </div>
        <button type="submit" id="form_submit" class="btn btn-light">Send</button>

        <div class="row">
            <div class="col-12">
                <style>
                    #embed-captcha {
                        width: 300px;
                        margin-left: auto;
                        margin-right: auto;
                        margin-bottom: 10px;
                    }

                    .show {
                        display: block;
                    }

                    .hide {
                        display: none;
                    }

                    #notice {
                        color: red;
                    }

                    #g-recaptcha>div {
                        margin: 0 auto;
                        margin-bottom: 10px;
                    }
                </style>

                <div id="embed-captcha"></div>
            </div>
        </div>
        <div class="text-center">
            <a href="/login" class="btn btn-link box-shadow-0 px-0">or Login</a>
        </div>
      </center>    
	</form>
   </center>

</body>

</html>