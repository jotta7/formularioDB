<?php

    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'admin96';
    $dbName = 'formulario-lucas';

    $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName );

    // if($conexao->connect_errno){
    //     echo "Erro";
    // }else{
    //     echo "Conexão efetuada com sucesso";
    // } SO PARA SABER SE ESTA CONECTANDO.

    //no mysql workbench da um select * from 'formulario-lucas'.usuarios; vara visualizar os dados entrando.

?>