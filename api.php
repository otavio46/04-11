<?php 

function buscarCEP($cep) {
    if(strlen($cep)== 8){
        //verificar se o CEP tem 8 caracteres
        $dados = json_decode(file_get_contents("https://viacep.com.br/ws/01001000/json/"),true);

        if(isset($dados['erro'])){
            //verificar se existe/contem o campo "erro"
            return "Cep não econtrado!!";
        }else {
            return $dados;
        }
    }
}

?>