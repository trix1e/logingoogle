<?php
//CONFIGURACION.PHP
  require_once 'vendor/autoload.php';

  $clientID = '789765622222-pvd52rvoakdveu3lioeb44nqa89c273d.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'https://frut-club.com/';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>