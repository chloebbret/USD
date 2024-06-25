<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Vérification que la requête est de type POST

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '82056d34eee581';
    $phpmailer->Password = 'ddb02829aab80f';

    $phpmailer->setFrom('from@example.com', 'COCO');
    $phpmailer->addAddress('recipient@example.com', 'Destinataire');
    $phpmailer->Subject = 'Formulaire de contact USD';
    $phpmailer->Body = "Prénom: $prenom\nNom: $nom\nEmail: $email\nTéléphone: $telephone\n\n$message";

    if($phpmailer->send()) {
        echo 'E-mail envoyé avec succès.';
    } else {
        echo 'Erreur lors de l\'envoi de l\'e-mail: ' . $phpmailer->ErrorInfo;
    }
} else {
    echo 'Erreur: Accès refusé.';
}
?>
