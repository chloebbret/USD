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

<section id="contact">
    <h1 class="section-header">Contact</h1>
    <div class="contact-wrapper">
        <form id="contact-form" class="form-horizontal" role="form">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" style="width: 400px;height: 40px;border-radius: 8px;margin-bottom: 20px;" id="name" placeholder="NAME" name="name" value="" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <input type="email" class="form-control" style="width: 400px;height: 40px;border-radius: 8px;margin-bottom: 20px;" id="email" placeholder="EMAIL" name="email" value="" required>
                </div>
            </div>

            <textarea class="form-control" style="width: 400px; border-radius: 8px; height: 203px" rows="10" placeholder="MESSAGE" name="message" required></textarea>

            <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                <div class="alt-send-button">
                    <span class="send-text">ENVOYER</span>
                </div>
            </button>
        </form>

        <div class="direct-contact-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.469284750768!2d5.703320499999999!3d45.540884399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b05c73f44c37f%3A0xb1d599ecaa1f502!2sStade%20de%20domessin!5e0!3m2!1sfr!2sfr!4v1694767236596!5m2!1sfr!2sfr"
                    width="400"
                    height="300"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>

            <hr>
            <ul class="social-media-list">
                <li><a href="https://www.facebook.com/usdomessin/" target="_blank" class="contact-icon">
                        <i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li><a href="https://twitter.com/bret_chloe" target="_blank" class="contact-icon">
                        <i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li><a href="https://usd.kreanie.fr" target="_blank" class="contact-icon">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                </li>
                <li><a href="https://www.instagram.com/cbernardbret/" target="_blank" class="contact-icon">
                        <i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                </li>
            </ul>
            <hr>
        </div>
    </div>
</section>
</body>
</html>