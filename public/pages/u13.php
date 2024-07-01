<!-- <?php
// $url = "https://savoie.fff.fr/recherche-clubs?scl=11381&tab=resultats&subtab=calendar&competition=412620&stage=2&group=1&label=U13%20D3";

// // Récupérer le contenu de la page
// $response = file_get_contents($url);

// // Vérifier si la récupération a réussi
// if ($response === false) {
//     die('Erreur lors de la récupération du contenu.');
// }

// // Afficher le contenu
// echo $response;
?> -->


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include '../inc/menu.php' ?>
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/team.css">
    <title>USD</title>
</head>

<body>

<h1 style="color: white; display: flex; justify-content: center; margin-top: 1em; font-size: 70px">U13</h1>

<div class="teamPhoto">
    <img src="../img/u13.jpg" alt="" class="team">
</div>

<hr style="color: white; width: 80%; margin-top: 16em; margin-bottom: 16em">

<h1 style="color: white; display: flex; justify-content: center; margin-top: 3em; font-size: 40px; margin-bottom: 3em;">LES COACHS</h1>

<div class="role-section">
    <div class="item">
        <img src="../img/cedric.jpg" alt="Cédric BILLAUD" class="staff">
        <div class="overlay">
            <div class="info">
                <span class="name">Cédric BILLAUD</span><br>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="../img/tristan.jpg" alt="Tristan TRILLAT" class="staff">
        <div class="overlay">
            <div class="info">
                <span class="name">Tristan TRILLAT</span><br>
            </div>
        </div>
    </div>
</div>

<hr style="color: white; width: 80%; margin-top: 16em; margin-bottom: 16em">

<div class="teamContainer">
    <div class="teamresultats">
        <div class="box">
        </div>
        <div class="box">
            <?php echo file_get_contents("https://savoie.fff.fr/recherche-clubs?scl=11381&tab=resultats&subtab=calendar&competition=412620&stage=2&group=1&label=U13%20D3"); ?>
        </div>
    </div>

    <div class="teamClassement">
        <div class="box" style="height: 41em"></div>
    </div>
</div>

<?php include '../inc/footer.php' ?>

</body>
</html>
