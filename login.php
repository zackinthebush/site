<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="login-dark" style="background: url(&quot;assets/img/1679846.jpg&quot;);margin: 0px;margin-top: 0px;margin-bottom: -29px;height: 1000px;">
        <form method="post" action="login.php">
        <?php include('errors.php'); ?>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration" style="background: #1e2833;color: var(--danger);"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background: var(--red);" name="login_user">Log In</button></div><a class="forgot" href="register.php">vous n'avez pas de compte clicker ici</a>
        </form>
    </section>
    <footer id="footerpad" style="margin: 0px;margin-bottom: 00;margin-top: 28px;background: var(--gray-dark);height: 130.7px;margin-right: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/riyuzakiuchiha.uchiha"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse" style="background: var(--danger);border-width: 0px;border-radius: 20px;"></i></span></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/yahiauchiha200"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse" style="background: var(--red);border-radius: 20px;"></i></span></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/gwynbleidd_20_30/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse" style="background: var(--red);border-radius: 20px;"></i></span></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/yahia-messaoudi-26998720b/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse" style="background: var(--red);border-radius: 20px;"></i></span></a></li>
                    </ul>
                    <p class="copyright text-muted text-center">devlopper est creer par messaoudi yahia zakaria</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>