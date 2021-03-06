<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat|Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/estilo.css" rel="stylesheet">


    <title>Blog Jean forteroche</title>

    <!-- Bootstrap core CSS -->
</head>

<body>
<div id="header" class="container-fluid">
    <div id="header_items" class="container">
        <div id="left_item" class="col-md-4">
            <h4><a href="../public/index.php">JEAN FORTOROCHE</a></h4>
        </div>
        <div id="right_item"class="col-md-8">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">à propos</a></li>
                <li><a href="#">contact</a></li>
                <li><a href="index.php?p=users.login">se connecter</a></li>

            </ul>
        </div>
    </div>
    <div id="last_episode" class="container">
        <h5>billet simple pour l'Alaska</h5>
        <h4>- Episode 1 - <br/> Marry me !</h4>
    </div>
    <div id="buttonMore" class="container">
        <a href="index.php?p=posts.show&id=" class="btnMore" role="button">Voir l'épisode</a>
    </div>
</div>

<div class="container-fluid">



</div><!-- /.container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(function(){
        $('.show').click(function() {
            $('.formComRep').slideToggle('slow');
            return false;
        });
    });
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<footer>
    <p class="container-fluid">Design for Jean Forteroche by <span class="goodwin">Goodwin</span> © 2017 Tous droits réservés</p>
</footer>
</body>
</html>
