<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');

    if (empty($nom) || !$email || empty($message)) { 
        http_response_code(400); 
        echo "Veuillez remplir correctement tous les champs."; 
        exit; 
    }

    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        // TON VRAI COMPTE GMAIL
        $mail->Username = 'noreplyusdomessin@gmail.com';

        // Mot de passe d'application généré
        // pour cette adresse Gmail
        $mail->Password = 'eide gubh drql nzyk';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // L'expéditeur doit être ton compte Gmail
        $mail->setFrom(
            'noreplyusdomessin@gmail.com',
            'Formulaire du site USD'
        );

        // Ton adresse personnelle qui reçoit les messages
        $mail->addAddress('noreplyusdomessin@gmail.com');

        // Quand tu cliques sur "Répondre",
        // tu réponds directement à la personne qui a rempli le formulaire
        $mail->addReplyTo($email, $nom);

        // Sujet
        $mail->Subject = 'Nouveau message de ' . $nom;

        // Format HTML
        $mail->isHTML(true);

        $mail->Body = ' 
            <div style="font-family: Arial, sans-serif; line-height: 1.6;">

                <h2 style="display: flex!important; justify-content: center; align-items: center; font-size: 26px; color: red;">
                    Nouveau message depuis le site USD
                </h2> 
                <hr> 
                <p style="font-size: 15px"> <strong style="font-size: 20px">Nom :</strong>
                    <br> ' . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') . ' 
                </p> 
                <p style="font-size: 15px"> <strong style="font-size: 20px">Email :</strong>
                    <br> ' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . ' 
                    </p> 
                <p style="font-size: 15px"> <strong style="font-size: 20px">Message :</strong>
                    <br> ' . nl2br( htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ) . ' 
                    </p> 
                </div> 
        ';

        // Version texte
        $mail->AltBody =
            "Nouveau message depuis le site USD\n\n" .
            "Nom : $nom\n" .
            "Email : $email\n\n" .
            "Message :\n" . ($_POST['message'] ?? '');

        // Envoi
        $mail->send();

        echo "Message envoyé avec succès";

    } catch (Exception $e) {
        echo "Erreur lors de l'envoi : " . $mail->ErrorInfo;
    }

} else {
    echo "Accès interdit.";
}
?>

