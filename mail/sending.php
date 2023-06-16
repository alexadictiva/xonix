<?php
if (!isset($_POST['email'])) {
} else {
  $message = "Form Message ";
  $message .= "\nName: " . $_POST['name'];
  $message .= "\nLastname: " . $_POST['lastname'];
  $message .= "\nEmail: " . $_POST['email'];
  $message .= "\nMessage: \n" . $_POST['message'];
  $destiny = "alexandra220790@gmail.com";
  $sender = $_POST['email'];
  $asunto = "Enviado por: " . $_POST['name'];
  mail($destiny, $asunto, $message, "FROM: $sender");
}
