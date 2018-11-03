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

<div class="bg">
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
                    <li><a href="#volunteer">How it works?</a></li>
                    <li><a href="#donate">Donate</a></li>
                    <li><a href="#Users">Users</a></li> 
                    <li><?php if ($this->session->logged_in) { ?><a href="<?php echo site_url('Users/logout'); ?>">Jobs for you</a><?php } ?></li>
                    <li><?php if (!$this->session->logged_in) { ?><a href="<?php echo site_url('home/login'); ?>">LOGIN/REGISTER</a><?php } ?></li>
                    <li><?php if ($this->session->logged_in) { ?><a href="<?php echo site_url('Users/logout'); ?>">Logout</a><?php } ?></li>
                </ul>
            </div>
        </div>

    </nav>

    <?php if ($this->session->logged_in) { ?>
        <div class="logged_in">
            <p style="text-align: center;">Welcome <?php echo $this->session->userdata('username'); ?>!</p>
        </div>
    <?php } ?>
</div>

<div class="container">
    <div class="heading venite">
        <h1>VENITE</h1>
    </div>
</div>

</div>

<!-- How it works -->
<div class="container" id="volunteer">
    <div class="row">
        <div class="col-md-4 heading">
            <h1>HOW</h1>
            <h1>IT</h1>
            <h1>WORKS?</h1>
        </div>
        <div class="col-md-8">
            <b>
            <p>Venite functions as a social network for demonstrating the experience and thrill of volunteering. Bringing a reality to those who have little experience but want more. The badge system and work log format should even promote current volunteers to continue volunteering for increased incentives.</p>
            <p>Our primary concern would be to implement our forum community. Engaging the volunteers or potential volunteers in conversation about past experiences or clarifying any uncertainties is a major goal for our project.</p>
            <p>For security reasons we would be using blockchains because of their properties of immutability and transparency, as a secondary database for continous verification of records.
            </p>
        </b>
        </div>
    </div>
</div>
</body>
</html>
