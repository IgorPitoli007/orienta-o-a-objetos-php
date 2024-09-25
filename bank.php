<?php
    include("banco.php");
    $conta=new conta;
    $conta->idconta=001;
    $conta->nome="igor";   
    $conta->senha="12345678";
    $conta->agencia=5;
    $conta->saldo=500;
    $conta->exibir();
    $conta->saque(500);
    $conta->deposito(300);
    $conta->saque(500);
?>