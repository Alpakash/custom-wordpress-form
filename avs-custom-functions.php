<?php

/**
* Plugin Name: AVS Custom Functions Plugin
* Description: This plugin contains all of my awesome custom functions.
* Author: Akash Soedamah
* Version: 1.0
*/

add_action( 'plugins_loaded', 'send_message' );
 
function send_message() {
if (isset($_POST["submitted"])) {

$name = $_POST['name'];
$email = $_POST['email'];
$opdracht = $_POST['opdracht'];
$message = 'Aanvraag van: ' . $name . "\n\nZijn/haar Email: " . $email . "\n\nSoort opdracht en prijs: " . $opdracht;
$headers[] = 'From: SimplePictures <info@simplepictures.nl>';

wp_mail( 'akash.soedamah@gmail.com', 'Drone Aanvraag', $message, $headers);
$success = mail($email, 'Drone Aanvraag', $message);
header('Location: http://www.simplepictures.nl/bedankt');
exit();
} 
}


?>