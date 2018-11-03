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

<div class="container">
    <div class="heading">
        <h1>VOLUNTEERS</h1>
    </div>
    <?php foreach ($all_users as $user) : ?>
        <p><strong>Username: </strong><?php echo $user['username']; ?></p>
        <p><strong>Location: </strong><?php echo $user['state']; ?></p>
    <?php endforeach; ?>
</div>

</body>
</html>
