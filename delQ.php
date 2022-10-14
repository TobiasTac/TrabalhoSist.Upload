<?php
error_reporting(0);
ini_set("display_errors", 0 );
$quarto = scandir("Cômodos/Quarto");
array_shift($quarto);
array_shift($quarto);
foreach($quarto as $linha){
    fopen("Cômodos/Quarto/$linha",'a');
    unlink("Cômodos/Quarto/$linha");
}
rmdir("Cômodos/Quarto");
echo 'Quartos excluídos com sucesso!
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
