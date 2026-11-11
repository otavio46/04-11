<?php 

include "./api.php";
// $endereco = buscarCEP("69905232"),

// echo "</pre>";
// print_r($endereco);
// echo "</pre>";

if(isset($_GET['cep'])) {
    $cep = $_GET['cep'];
    $endereco = buscarCEP($cep);
    
}
?>
<form method="GET">
    <input
    type="text"
    placeholder="Buscar cep..."
    name="cep"

>
<button>Buscar</button>
</form>
<?php if(isset($endereco['cep'])):?>

<div>
    <h2>CEP encontrado</h2>
    <ul>
        <?php 
        foreach($endereco as $data => $valor) {
            if(strlen($valor) > 0){
                echo "$data: $valor <br>";
              
            }   
        }
        ?>
    </ul>
    <form action="salvar.php" method="POST">
        <input type="hidden"
         name="cep"
          value="<?php echo htmlspecialchars($_GET['cep'])?>">
        <button>Salvar</button>
    </form>
</div>
<?php elseif(isset($endereco['erro'])):?>
<h2>CEP não encontrado</h2>
<p>O cep ditado pelo usuario não existe</p>
<?php endif;?>