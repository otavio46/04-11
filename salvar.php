<?php 
include "api.php";

if($_SERVER ['REQUEST_METHOD'] == "POST") {
    echo $_POST['cep'];
    $endereco = buscarCep($cep);

}
?>