<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $message = "Mensaje de formulario\n";
  $message .= "Nombre: " . $_POST['name'] . "\n";
  $message .= "Apellido: " . $_POST['lastname'] . "\n";
  $message .= "Email: " . $_POST['email'] . "\n";

  if (isset($_POST['newsletter']) && $_POST['newsletter'] == 'on') {
    $message .= "Subscribe a la newsletter: SI\n";
  } else {
    $message .= "Subscribe a la newsletter: NO\n";
  }

  $destiny = "alexandra220790@gmail.com";
  $sender = $_POST['email'];
  $subject = "Formulario de contacto - Enviado por: " . $_POST['name'];

  mail($destiny, $subject, $message, "From: $sender");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Descubre los relojes deportivos resistentes al agua de XONIX. Más de 40 años de calidad y tecnología para los amantes del aire libre. Experiencia de compra única y satisfactoria con nuestro equipo especializado. Encuentra el reloj perfecto para ti en nuestra tienda." />
  <link rel="shortcut icon" href="./../assets/icon/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="./../assets/css/main.css" />

  <title>Xonix</title>
</head>

<body>


  <div class="modal" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h2>¡Gracias por suscribirte!</h2>
          <p>Tu información ha sido enviada correctamente.</p>
        </div>
        <div class="modal-footer">
          <button class="btn-close-modal" onclick="closeModal()">
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./../assets/js/main.js"></script>

</body>

</html>