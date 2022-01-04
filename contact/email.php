<?php


if(isset($_POST['email']) && !empty($_POST['email'])){


$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);

$to = "contato@sintecadoravalim.com";
$subject = "Contato - Sintecadora Valim";
$body = "Nome: ".$name. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$message;

$header = "From:contactform@sintecadoravalim.com". 
"\r\n"."Reply-To:".$email."\r\n"."X-Mailer:PHP\".phpversion();


if(mail($to, $subject, $body, $header)){
    echo('Mensagem enviada');
}
else{
    echo('A mensagem não pode ser enviada');
}

}


?>
