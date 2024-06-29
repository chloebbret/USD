<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include '../inc/menu.php' ?>
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>USD</title>
</head>

<body>
<div class="container">
    <div class="innerwrap">

        <section class="section1 clearfix">
            <div class="textcenter">
                <span class="shtext">Contactez nous !</span>
                <span class="seperator"></span>
                <h1>Contactez nous !</h1>
            </div>
        </section>

        <section class="section2 clearfix">
            <div class="col2 column1 first">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.4690994446614!2d5.70074557735974!3d45.540888128317214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b05c73f44c37f%3A0xb1d599ecaa1f502!2sStade%20de%20domessin!5e0!3m2!1sfr!2sfr!4v1719505906431!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                
            </iframe>
            </div>


            <div class="col2 column2 last">
                <div class="sec2contactform">
                    <form action="trait.php" method="post">
                        <div class="clearfix">
                            <input class="col2 first" type="text" placeholder="Prénom" name="prenom" required>
                            <input class="col2 last" type="text" placeholder="Nom" name="nom" required>
                        </div>
                        <div class="clearfix">
                            <input  class="col2 first" type="Email" placeholder="Email" name="email" required>
                            <input class="col2 last" type="text" placeholder="Téléphone" name="telephone">
                        </div>
                        <div class="clearfix">
                            <textarea name="message" id="" cols="30" rows="7" placeholder="Votre message" required></textarea>
                        </div>
                        <div class="clearfix"><input type="submit" value="Envoyez"></div>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>

<footer class="footer">
    <div class="icons">
        <a href="https://www.facebook.com/usdomessin/?locale=fr_FR" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="../pages/contact.php"><i class="fa-solid fa-comments"></i></a>
        <p class="company-name">
            US DOMESSIN
        </p>
    </div>
</footer>
</body>
</html>