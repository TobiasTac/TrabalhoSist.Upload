<?php
error_reporting(0);
ini_set("display_errors", 0 );
$sala = scandir("Cômodos/Sala");
array_shift($sala);
array_shift($sala);
foreach($sala as $linha){
    fopen("Cômodos/Sala/$linha",'a');
    unlink("Cômodos/Sala/$linha");
}
rmdir("Cômodos/Sala");
echo 'Salas excluídos com sucesso!
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
