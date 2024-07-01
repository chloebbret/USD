<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include '../inc/menu.php' ?>
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/team.css">
    <title>USD</title>
</head>
<body>

<h1 style="color: white; display: flex; justify-content: center; margin-top: 1em; font-size: 70px">U17</h1>

<div class="teamPhoto">
    <img src="../img/u17.jpg" alt="" class="team">
</div>

<hr style="color: white; width: 80%; margin-top: 16em; margin-bottom: 16em">

<h1 style="color: white; display: flex; justify-content: center; margin-top: 3em; font-size: 40px; margin-bottom: 3em;">LES COACHS</h1>

<div class="role-section">
    <div class="item">
        <img src="../img/sebastien.jpg" alt="Sébastien BERNARD BRET" class="staff">
        <div class="overlay">
            <div class="info">
                <span class="name">Sébastien BERNARD BRET</span><br>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="../img/françois.jpg" alt="François MOREAU" class="staff">
        <div class="overlay">
            <div class="info">
                <span class="name">François MOREAU</span><br>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="../img/chloe.jpg" alt="Chloé BERNARD BRET" class="staff">
        <div class="overlay">
            <div class="info">
                <span class="name">Chloé BERNARD BRET</span><br>
            </div>
        </div>
    </div>
</div>

<hr style="color: white; width: 80%; margin-top: 16em; margin-bottom: 16em">

<div class="teamContainer">
    <div class="teamresultats">
        <div class="box" id="resultats"></div>
        <div class="box team-link"></div>
    </div>

    <div class="teamClassement">
        <div class="box" style="height: 41em" id="classement"></div>
    </div>
</div>

<?php include '../inc/footer.php' ?>

</body>
</html>