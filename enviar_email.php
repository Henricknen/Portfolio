<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $to = "l.henrick@live.com";
    $subject = $assunto;
    $message = "Nome: $nome\n";
    $message .= "Email: $email\n\n";
    $message .= "Mensagem:\n$mensagem\n";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Erro ao enviar o email.";
    }
}

