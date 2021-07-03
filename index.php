<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    
}
?>
<!DOCTYPE html>
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

<body style="color: rgb(0,115,231);">
    <header class="header-blue" style="background: url(&quot;assets/img/897104.jpg&quot;);margin-top: 0px;margin-bottom: 0px;">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="color: var(--white);background: var(--danger);">
            <div class="container-fluid"><a class="navbar-brand" href="index.php">batna cinema</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="https://www.google.fr/maps/place/Salle+Aures/@35.5542333,6.1757066,17z/data=!3m1!4b1!4m5!3m4!1s0x12f411bc15899527:0xa8a70c0b8e69ace6!8m2!3d35.5542133!4d6.1778721">location</a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group mb-0"><label for="search-field"></label></div>
                        </form>
                        <?php  if (isset($_SESSION['username'])){ ?>
                            <span class="navbar-text"> <a class="login" href="login.php"><?php echo $_SESSION['username']; ?>&nbsp;</a></span><a class="btn btn-light action-button" role="button" href="index.php?logout='1'">deconnecter</a>
                    <?php   }else { ?>
                        <span class="navbar-text"> <a class="login" href="login.php">se connecter&nbsp;</a></span><a class="btn btn-light action-button" role="button" href="register.php">créer un compte</a>
                     <?php  }  ?>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1 class="text-center" style="color: rgb(255,255,255);font-family: ABeeZee, sans-serif;font-size: 200px;">salle&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Aures</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><a href="catalogue.php"><button type="button" style="color: rgb(242,236,236);background: var(--gray-dark);font-size: 34px;transform-origin: center;transform-style: preserve-3d;text-align: center;font-family: ABeeZee, sans-serif;margin: 166px;margin-left: 390px;border-radius: 30px;border-top-color: var(--light);border-right-color: var(--white);border-bottom-color: var(--white);border-left-color: var(--white);">voir le catalogue</button><a></div>
            </div>
        </div>
        <footer id="footerpad" style="margin: 0px;margin-bottom: -122px;margin-top: 0px;background: var(--gray-dark);height: 130.7px;">
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
    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
		
</body>
</html>