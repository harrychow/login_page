<?php
require_once('vendor/autoload.php');

$email = $_POST['email'];
$pw = $_POST['pw'];
$is_post = $_SERVER['REQUEST_METHOD'] === 'POST';

$logged_in = ($is_post && !empty($pw) && !empty($email)) ? true:false;

$loader = new \Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new \Twig_Environment($loader);


echo $twig->render('login.twig', ['logged_in'=> $logged_in, 'email' => $email, 'pw' => $pw]);

?>
