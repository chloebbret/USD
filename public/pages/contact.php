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
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                <div class="sec2map" style='overflow:hidden;height:550px;width:100%;'>
                    <div id='gmap_canvas' style='height:100%;width:100%;'></div>
                    <div><small><a href="http://embedgooglemaps.com"></a></small></div>
                    <div><small><a href="http://freedirectorysubmissionsites.com/"></a></small></div>
                    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                </div>
                <script type='text/javascript'>
                    function init_map() {
                        var myOptions = {
                            zoom: 14,
                            center: new google.maps.LatLng(45.570290, 5.800790), // Coordonnées du stade municipal de Domessin
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        marker = new google.maps.Marker({
                            map: map,
                            position: new google.maps.LatLng(45.5408881, 5.7007456) // Coordonnées du stade municipal de Domessin
                        });
                        infowindow = new google.maps.InfoWindow({
                            content: '<strong>Stade Municipal de Domessin</strong><br>Domessin, France<br>'
                        });
                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.open(map, marker);
                        });
                        infowindow.open(map, marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);
                </script>
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