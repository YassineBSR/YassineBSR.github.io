<?php
// Récupération des données du formulaire
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_number = $_POST['user_number'];
$user_subject = $_POST['user_subject'];
$user_message = $_POST['user_message'];

// Adresse e-mail destinataire
$to = "yassine60160@gmail.com";

// Sujet du message
$subject = "Nouveau message de $user_name sur votre site web";

// Contenu du message
$message = "Nom de l'utilisateur : $user_name\n\n";
$message .= "Numéro de l'utilisateur : $user_number\n\n";
$message .= "Adresse e-mail de l'utilisateur : $user_email\n\n";
$message .= "Message de l'utilisateur :\n$user_message\n";

// En-têtes du message
$headers = "From: $user_email\r\n";
$headers .= "Reply-To: $user_email\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

// Envoi du message
if(mail($to, $subject, $message, $headers)) {
  echo "Votre message a été envoyé avec succès.";
} else {
  echo "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer plus tard.";
}
?>
