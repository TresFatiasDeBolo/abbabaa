<?php

header('Content-Type: application/json');

//conectar ao banco
$conn = new mysqli ("localhost","root","","panificadora");

if($conn->connect_error) {
    die(json_encode(["erro" => "Erro ao conectar"]));
};

//consulta SQL

$sql = "SELECT id, nome, quantidade, preco FROM produtos";
$resultado = $conn -> query($sql);

$produtos = [];

while($linha = resultado -> fetch_assoc()){
    $produtos[] = $linha;
}

echo json_Encode($produtos);