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
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/User-Payment-Overview-Rows---Panel-Container.css">
</head>

<body>
<div class="card">
        <div class="card-header">
            <h3><span class="fa-stack"><i class="fa fa-circle fa-stack-2x text-muted"></i><i class="fa fa-film fa-stack-1x fa-inverse" style="background: var(--red);border-radius: 27px;"></i></span>catalogue de film</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <h4>Name </h4>
                </div>
                <div class="col-md-7">
                    <h4>Amount </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="assets/img/joker-est-le-film-qui-a-engendre-le-plus-de-plaintes-au-royaume-uni-en-2019.jpg" width="50" height="50"></div>
                        <div class="media-body">
                            <h4><a href="#">JOKER&nbsp;</a><span class="badge badge-success">thriller psycologique</span></h4>
                            <p class="text-muted">date de sortie 2019&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; en salle le : 15/07/2021<br>
</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p><br>
</p><span class="h3">1000 DA</span>
                    <p></p>
                </div>
                <div class="col-md-3 text-right">
                    <div class="btn-group" role="group"><a href="payment.php"><a href="payment.php"><button class="btn btn-primary" type="button">&nbsp;reserver</button></a></a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="assets/img/avengers-endgame-poster-top-half.jpg" width="50" height="50"></div>
                        <div class="media-body">
                            <h4><a href="#">Avengers: Endgame&nbsp;</a><span class="badge badge-success">super-hero</span></h4>
                            <p class="text-muted">date de sortie 2019&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; en salle le : 16/07/2021<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p><span class="h3"><br>1500 DA<br><br></span><strong> </strong></p>
                    <p></p>
                </div>
                <div class="col-md-3 text-right">
                    <div class="btn-group" role="group"></div>
                    <p> </p><a href="payment.php"><button class="btn btn-primary" type="button">&nbsp;reserver</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="assets/img/The-Conjuring-3-Trailer.jpg" width="50" height="50"></div>
                        <div class="media-body">
                            <h4><a href="#">&nbsp; &nbsp;Conjuring 3&nbsp;&nbsp;</a><span class="badge badge-success">horreur</span></h4>
                            <p class="text-muted">date de sortie 2021&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; en salle le : 17/07/2021<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p><br>
<strong> </strong></p>
                    <p></p><span class="h3">1200 DA&nbsp;</span>
                </div>
                <div class="col-md-3 text-right">
                    <div class="btn-group" role="group"></div>
                    <p> </p><a href="payment.php"><button class="btn btn-primary" type="button">&nbsp;reserver</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="assets/img/4485647.jpg" width="50" height="50"></div>
                        <div class="media-body">
                            <h4><a href="#">toy story 4&nbsp;</a><span class="badge badge-success">animation</span></h4>
                            <p class="text-muted">date de sortie 2019&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; en salle le : 13/07/2021<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p><br>
<strong> </strong></p>
                    <p></p><span class="h3">700&nbsp; DA</span>
                </div>
                <div class="col-md-3 text-right">
                    <div class="btn-group" role="group"></div>
                    <p> </p><a href="payment.php"><button class="btn btn-primary" type="button">&nbsp;reserver</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="assets/img/OnePieceStampede-Banniere-800x445.jpg" width="50" height="50"></div>
                        <div class="media-body">
                            <h4><a href="#">one piece stampede&nbsp;</a><span class="badge badge-success">nekketsu</span></h4>
                            <p class="text-muted">date de sortie 2019&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; en salle le : 21/07/2021<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p><br>
<strong> </strong></p>
                    <p></p><span class="h3">500&nbsp; &nbsp;DA</span>
                </div>
                <div class="col-md-3 text-right">
                    <div class="btn-group" role="group"></div>
                    <p> </p><a href="payment.php"><button class="btn btn-primary" type="button">&nbsp;reserver</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="assets/img/maxresdefault-4-4.jpg" width="50" height="50"></div>
                        <div class="media-body">
                            <h4><a href="#">fast and furious 9&nbsp;&nbsp;</a><span class="badge badge-success">action</span></h4>
                            <p class="text-muted">date de sortie 2021&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;en salle le : 18/07/2021<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p><br>
<strong> </strong></p><span class="h3">2000&nbsp; DA</span>
                    <p></p>
                </div>
                <div class="col-md-3 text-right">
                    <div class="btn-group" role="group"></div>
                    <p> </p><a href="payment.php"><button class="btn btn-primary" type="button">&nbsp;reserver</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="assets/img/a.jpg" width="50" height="50"></div>
                        <div class="media-body">
                            <h4><a href="#">A deux mètre de toi</a><span class="badge badge-success">romance et drame</span></h4>
                            <p class="text-muted">date de sortie 2018&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;en salle le : 07/07/2021<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p><br>
<strong> </strong></p>
                    <p></p><span class="h3">650&nbsp; &nbsp;DA</span>
                </div>
                <div class="col-md-3 text-right">
                    <div class="btn-group" role="group"></div>
                    <p> </p><a href="payment.php"><button class="btn btn-primary" type="button">&nbsp;reserver</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="assets/img/justice-league-le-nouveau-montage-fuite-sur-hbo-max-par-erreur.jpg" width="50" height="50"></div>
                        <div class="media-body">
                            <h4><a href="#">justice league&nbsp;</a><span class="badge badge-success">super-héros</span></h4>
                            <p class="text-muted">date de sortie 2021&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; en salle le : 22/07/2021<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p><br>
<strong> </strong></p><span class="h3">1300 DA</span>
                    <p></p>
                </div>
                <div class="col-md-3 text-right">
                    <div class="btn-group" role="group"></div>
                    <p> </p><a href="payment.php"><button class="btn btn-primary" type="button">&nbsp;reserver</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="assets/img/The-hobbit-the-battle-of-the-five-armies-lord-of-the-rings-the-fellowship-of-the-ring.jpg" width="50" height="50"></div>
                        <div class="media-body">
                            <h4><a href="#">the lord of the ring&nbsp;</a><span class="badge badge-success">fantasy</span></h4>
                            <p class="text-muted">date de sortie 2003&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; en salle le : 24/07/2021<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p><br>
<strong> </strong></p>
                    <p></p><span class="h3">200&nbsp; &nbsp;DA</span>
                </div>
                <div class="col-md-3 text-right"><button class="btn btn-primary" type="button" style="margin-top: 34px;">&nbsp;reserver</button>
                    <div class="btn-group" role="group"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="media">
                        <div><img class="rounded-circle mr-3" src="assets/img/818lMpNX7FL._AC_SY445_.jpg" width="50" height="50"></div>
                        <div class="media-body">
                            <h4><a href="#">atomic blonde&nbsp;&nbsp;</a><span class="badge badge-success">historique</span></h4>
                            <p class="text-muted">date de sortie 2016&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; en salle le : 27/07/2021<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p style="margin-top: 37px;"><span class="h3">550 DA</span><br>
<strong> </strong></p>
                    <p></p>
                </div>
                <div class="col-md-3 text-right">
                    <div class="btn-group" role="group"></div>
                    <p> </p><a href="payment.php"><button class="btn btn-primary" type="button">&nbsp;reserver</button></a>
                </div>
            </div>
        </div>
    </div>
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