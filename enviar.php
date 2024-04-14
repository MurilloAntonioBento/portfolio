<?php

    $nome  = addslashes($_POST['nome']);
    $email  = addslashes($_POST['email']);
    $telefone  = addslashes($_POST['telefone']);
    $mensagem  = addslashes($_POST['mensagem']);

    $destino = "murilloantoniobento@gmail.com"
    $assunto = "Fala Comigo! - Portfólio Murillo"

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: murilloantoniobento@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion()

    if(mail($destino,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }

?>