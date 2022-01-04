<?php


if(isset($_POST['submit'])){


$name = $_POST['name'];
$subject = "Contato - Sintecadora Valim";
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "contato@sintecadoravalim.com";
$headers = "From: ".$mailFrom;

$txt = $name." diz: "."\n\n".$message;

if(mail($mailTo, $subject, $txt, $headers)){
echo("Mensagem enviada com sucesso!")
}else{
    echo("A mensagem não pode ser enviada, por favor, tente novamente.")
}
}
