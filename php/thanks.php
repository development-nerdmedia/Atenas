<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../static/css/main.6480e3ae.css" />
    <title>Atenas</title>
  </head>
  <body
    style="
      background-color: black;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    "
  >
  <?php 
$myemails = 'development@nerdmedia.pe';
$name = $_POST['full-name'];
$tel = $_POST['telephone'];
$email = $_POST['email'];
$select = $_POST['seelctservicio'];
$message = $_POST['message'];

$cuerpo = '
<html>  
<body>  
<h1>¡Hola Atenas!</h1> 
<p>Tienes un nuevo mensaje:</p>
<p> <b>Nombre :</b> '.$name .'</p>
<p> <b>Teléfono :</b> '.$tel .'</p>
<p> <b>Email :</b> '.$email .'</p>
<p> <b>Servicios solicitado :</b> '.$select .'</p>
<p> <b>Mensaje :</b> '.$message .'</p>
</body> 
</html> 
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

$to = $myemails;
$email_subject = "¡Contacto Atenas!";
$email_body = "Haz recibido un nuevo mensaje de: \n Nombre: $name";
$headers .= "From: Atenas";


mail($to, $email_subject, $cuerpo, $headers);
?>
    <section class="thankspage">
        <div class="container">
            <div class="top">
                <a href="http://atenas.media/">X</a>
            </div>
            <div class="content">
                <img src="../static/media/img-thanks.png" alt="">
                <h1>¡Gracias!</h1>
                <p>Nos contactaremos contigo en breve.</p>
            </div>
        </div>
      </section>
  </body>
</html>
