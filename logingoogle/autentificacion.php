<?php
  $conn = new mysqli('localhost', 'root', '', 'usuarios');

  // Verificar la conexión
  if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
  }
  //AUTENTIFICACION.PHP
  require_once 'configuracion.php';
  

 

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);


  // get profile info
  
  $google_oauth = new Google\Service\Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
 
  // now you can use this profile info to create account in your website and make user logged in.
  

  // Insertar datos en la base de datos
  $sql = "INSERT INTO usuarios (email, nombre) VALUES ('$email', '$name')";

  if ($conn->query($sql) === TRUE) {
    echo "Datos del usuario registrados exitosamente";
  } else {
    echo "Error al registrar los datos del usuario: " . $conn->error;
  }

  $conn->close();

  
}



?>