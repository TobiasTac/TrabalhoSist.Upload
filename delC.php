<?php
error_reporting(0);
ini_set("display_errors", 0 );

$cozinha = scandir("Cômodos/Cozinha");
array_shift($cozinha);
array_shift($cozinha);
foreach($cozinha as $linha){
    fopen("Cômodos/Cozinha/$linha",'a');
    unlink("Cômodos/Cozinha/$linha");
}
rmdir("Cômodos/Cozinha");
echo 'Cozinhas excluídos com sucesso!
<form enctype="multipart/form-data" action="galeria.php" method="POST">
<button type="submit">Retornar</button>
</form>
<form enctype="multipart/form-data" action="index.php">
<button type="submit">Adicionar Novas Imagens</button>
</form>';
?>
<style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }
    </style>

