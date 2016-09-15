<?php

// recebe as Variaveis
$nome     = $_POST["nome"    ];
$email    = $_POST["email"   ];
$assunto  = "E-mail enviado do site"; // $_POST["assunto" ];
$mensagem = $_POST["mensagem"];


global $email; //transforma em variavel global a variavel e-mail
$enviou =   mail("camillafranca20@hotmail.com", 
                  utf8_decode("$assunto"),
                 "
                  Nome:   $nome  
                  -----------------------------------------------
                  Mensagem: " . utf8_decode("$mensagem") . "
                  -----------------------------------------------",
                 "From: $nome <$email>");

if ($enviou)
{
 echo "<script>javascript:alert('Email enviado!')</script>";
 echo "<script>javascript:location.href='/'</script>";

}
else
{
 echo "<script language=javascript>";
 echo "alert ('Erro,email nao enviado')";
 echo "</script>";
}

?>	