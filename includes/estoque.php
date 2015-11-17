<?php
if(file_exists("global.php")){ 
}else if(file_exists("includes/global.php")){
    include_once '.include/global.php';
}

function salvar () {
    if(
            isset($_POST['nome']) and 
            isset ($_POST['valor']) and
            isset ($_POST['qtd'])
)}
    
$nome = $_POST
$valor = $_POST
 $qtd = $_POST
        
        $SQL = "";
$preparo = conexao ()->prepare($SQL);
//$preparo->bindvalue(", $nome);
//$preparo->bindvalue(", $valor);
//$preparo->bindvalue(", $qtd);
$preparo->execute();
if($preparo->rowCount() == 1){
    echo "Sucesso!";
}else{
    echo "Erro!"
    }
}