<?php
/**
 * Cory Cizauskas
 * 
 * This code checks to see if the password is correct without downloading the resume.pdf
*/

if (! isset($_POST['password'])) {
die('Password is Incorrect');
}

$password = $_POST['password'];
$hash = '$2y$10$jvQeJgHwRtu2S0yvbKsg/O7EYdKfvNPZSCyea/JujvHsb.uLAB.Ju'; //password_hash('____', PASSWORD_DEFAULT);

if(! password_verify($password, $hash)) {
die('Password is Incorrect');
}

die('Password Accepted');


?>