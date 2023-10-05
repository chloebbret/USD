<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
$retour = mail('chloe022002@gmail.com', 'Envoi depuis la page Contact', $_POST['message']);
if ($retour)
    echo '<p>Votre message a bien été envoyé.</p>';
?>
</body>
</html>
