<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'db_locadora_rev1';

$conexão = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexão->connect_errno)
{
echo "Erro";
}
else
{
    echo "Conexão efetuada com sucesso";
}

?>