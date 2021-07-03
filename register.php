<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

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
    <section class="register-photo" style="background: url(&quot;assets/img/1679846.jpg&quot;);margin-bottom: 0px;">
        <div class="form-container">
            <div class="image-holder" style="background: url(&quot;assets/img/1679856.jpg&quot;) center / cover space;margin-top: 0px;"></div>
            <form method="post" action="register.php" style="background: var(--gray-dark);margin-top: -31px;margin-bottom: 3px;">
                <?php include('errors.php'); ?>
                <h2 class="text-center" style="background: var(--gray-dark);color: var(--light);"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="username" name="username" placeholder="username" style="color: var(--white);background: var(--gray-dark);" value="<?php echo $username; ?>"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" style="color: var(--white);background: var(--gray-dark);" value="<?php echo $email; ?>"></div>
                <div class="form-group"><input class="form-control" type="password" name="password_1" placeholder="Password" style="background: var(--gray-dark);"></div>
                <div class="form-group"><input class="form-control" type="password" name="password_2" placeholder="Password (repeat)" style="background: var(--gray-dark);"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background: var(--red);" name="reg_user">creer un compte</button></div><a class="already" href="login.php">Vous avez deja un compte clicker ici.</a>
            </form>
        </div>
        <footer id="footerpad" style="margin: 0px;margin-bottom: -210px;margin-top: 28px;background: var(--gray-dark);height: 130.7px;margin-right: 0px;">
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
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>