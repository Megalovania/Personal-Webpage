<?php
/**
 * Cory Cizauskas
 * 
 * This file checks the password once again, and then downloads the resume.pdf
*/


if (! isset($_POST['password'])) {
  die('Password is Incorrect');
}

$password = $_POST['password'];
$hash = '$2y$10$jvQeJgHwRtu2S0yvbKsg/O7EYdKfvNPZSCyea/JujvHsb.uLAB.Ju'; //password_hash('____', PASSWORD_DEFAULT);

if(! password_verify($password, $hash)) {
  die('Password is Incorrect');
}

$file="../protected/resume.pdf";
header("Pragma: public");
header('Content-disposition: attachment; filename='.$file);
header("Content-type: ".mime_content_type($file));
header('Content-Transfer-Encoding: binary');
ob_clean();
flush();
readfile($file); 



?>