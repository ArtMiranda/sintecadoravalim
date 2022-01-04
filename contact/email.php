<?php


if (isset($_POST['submit'])){
$name = $_POST['name'];
$subject = "Contato pelo site";
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "contato@sintecadoravalim.com";
$headers = "From: ".$mailFrom;

$txt = $name"."diz: ".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}
