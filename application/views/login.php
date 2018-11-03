<!DOCTYPE html>
<html>
<head>
    <title>
        RUNIO
    </title>
    <!-- Bootstrap links -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS JS links -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style.css'); ?>">
    <script type = 'text/javascript' src = "<?php echo site_url('assets/js/init.js') ?>"></script>
    <script type = 'text/javascript' src = "<?php echo site_url('assets/js/nav.js') ?>"></script>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcomponents" aria-expanded "false">
                        <i class="glyphicon glyphicon-align-center"></i>
                </button>

            <a href="#" class="navbar-brand">VOLUNTEER FOR A CHANGE</a>
            </div>

            <div class="collapse navbar-collapse" id="navcomponents">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url('home/index') ?>">How it works?</a></li>
                    <li><a href="<?php echo site_url('home') ?>">Donate</a></li>
                    <li><a href="<?php echo site_url('home') ?>">Contact</a></li>
                    <li><a href="#">LOGIN/REGISTER</a></li>
                </ul>
            </div>
        </div>

    </nav>
</div>

<!-- Register/Login -->
<div class="container">
    <div class="row" id="lg">
        <div class="col-md-6" id="register">
            <div class="heading">
                <h1>REGISTER<h1>
            </div>
            <div class="forms">
                <form class="modal-content animate" action="<?php echo site_url('Users/signup'); ?>" method="post" autocomplete="off">
                    <div class="container">
                        <br><br>
                        <p><i>Create an account and be a volunteer.</i></p>
                        <hr>
                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required><br>

                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required><br>

                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>

                        <label for="state"><b>Location</b></label>
                        <input type="text" placeholder="Enter State" name="state" required><br>

                        <div class="clearfix">
                            <button type="submit" class="signupbtn"><b>Sign Up</b></button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6" id="login">
            <div class="heading">
                <h1>LOGIN</h1>
            </div>
            <br>
            <div class="forms">
                <form class="modal-content animate" action="<?php echo site_url('Users/login'); ?>" method="post" autocomplete="off">
    	            <div class="container">
			        <hr>
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>

			        <br>
                    <button type="submit" class="loginbtn"><b>Login</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
