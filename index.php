<!-- TOBIAS E HERICK -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
    <style>
        form {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }
    </style>
</head>
<body>
    <center><h2>Sistema de Upload de Arquivos</h2></center>
    <form enctype="multipart/form-data" action="p2.php" method="POST">
    <p>Nome do Cômodo <select name="diretorio" id="comodo" onclick="corrigir()">  
          <option value="Cozinha">Cozinha</option>
          <option value="Quarto">Quarto</option>
          <option value="Garagem">Garagem</option>
          <option value="Sala">Sala</option>
          <option value="Banheiro">Banheiro</option>
        </select><p>
        <p id="c1"> Não Selecionado </p>
        <p id="c2"> Não Selecionado </p>
        <p id="c3"> Não Selecionado </p>
        <p><button type="submit">Enviar Arquivo</button></p>
    </form>

    <script>
        function corrigir() {
            let sel = document.getElementById("comodo").value;
            
            document.getElementById("c1").innerHTML = sel + ' <input name="img1"  type="file" accept="image" />';
            document.getElementById("c2").innerHTML = sel + ' <input name="img2"  type="file" accept="image" />';
            document.getElementById("c3").innerHTML = sel + ' <input name="img3"  type="file" accept="image" />';
        }
    </script>
</body>
</html>
