<?php
session_start();
include_once('config_preenchimento_dados_formulário.php');
//print_r($_session);
if((!isset($_session['email']) == true) and (!isset($_session['senha']) == true))
{
unset($_session['email']);
unset($_session['senha']);
header('location: login.php');
}
$logado = $_session['email'];

$sql = "SELECT * FROM  t_usuario ORDER BY id DESC";

$result = $conexão->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    <title>Pesquisa Usuário</title>
    <style>
  <body{
        background: linear-gradiente(to right, rgb(20, 147,220) rgb(17, 54, 71));
        color: white
        text-align:center;
     }
    </style>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class ="navbar-brand" href="#">Pesquisa Usuário</a>
                <button class="navbar-toggler" type="button" data-bs-target="navbarNav" aria-controls="navbar" aria 
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="d-flex">
                <a href="sair.php" class="btn btn-danger me-5">Sair</a>
            </div>
        </nav>
        <br>
        <?php
            echo "<h1>Bem vindo <u>$$logado</u></h1>";
        ?>
        <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nome</th>
                    <th scope="col">email</th>
                    <th scope="col">senha</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['código do cliente']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                    }
                ?>
            </tbody>
            </table>
        </div>
  </body>
</html>
