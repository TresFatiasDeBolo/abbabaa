<?php

header("Content-Type: application/json");

//verificar se os dados foram enviados via POST

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    //conectar com o banco
    $conn = new mysqli ("localhost","root","","panificadora");

    if($conn->connect_error) {
        die(json_encode(["erro" => "Erro ao conectar"]));

    }

    //receber e limpar os dados

    
}