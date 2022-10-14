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
    <form enctype="multipart/form-data"  method="POST">
    <p>Nome do Cômodo <select name="diretorio" id="comodo" onclick="corrigir()">  
          <option value="Cozinha">Cozinha</option>
          <option value="Quarto">Quarto</option>
          <option value="Sala">Sala</option>
          <option value="Garagem">Garagem</option>
          <option value="Banheiro">Banheiro</option>
        </select><p>
        <p id="c1"> Não Selecionado </p>
        <p id="c2"> Não Selecionado </p>
        <p id="c3"> Não Selecionado </p>
        <p><button type="submit" class="bt">Enviar Arquivo</button></p>
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

<?php
error_reporting(0);
ini_set("display_errors", 0 );
$dir1 = 'Cômodos';
$dir2 = $_POST['diretorio'];

if (is_dir($dir1)) {
} else {
    mkdir('Cômodos');
}
if (is_dir("$dir1/$dir2")) {
    
} else {
    mkdir("$dir1/$dir2");
}


// -----------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------

$ext = strtolower(substr($_FILES['img1']['name'], -4)); //Pegando extensão do arquivo
$new_name = $dir2 . '1' . $ext;

$extjpeg = strtolower(substr($_FILES['img1']['name'], -5));
$new_namejpeg = $dir2 . '1' . $extjpeg;


if ($ext == ".jpg") {
    move_uploaded_file($_FILES['img1']['tmp_name'], "$dir1/$dir2/$new_name");
}

if ($ext == ".png") {
    move_uploaded_file($_FILES['img1']['tmp_name'], "$dir1/$dir2/$new_name");
} 

if ($extjpeg == ".jpeg") {

    move_uploaded_file($_FILES['img1']['tmp_name'], "$dir1/$dir2/$new_namejpeg");
} 



// -----------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------


$ext2 = strtolower(substr($_FILES['img2']['name'], -4)); //Pegando extensão do arquivo
$new_name2 = $dir2 . '2' . $ext2;

$extjpeg2 = strtolower(substr($_FILES['img2']['name'], -5));
$new_namejpeg2 = $dir2 . '2' . $extjpeg2;

if ($ext2 == ".jpg") {
    move_uploaded_file($_FILES['img2']['tmp_name'], "$dir1/$dir2/$new_name2");
} elseif ($extjpeg2 == ".jpeg") {

    move_uploaded_file($_FILES['img2']['tmp_name'], "$dir1/$dir2/$new_namejpeg2");
} elseif ($ext2 == ".png") {

    move_uploaded_file($_FILES['img2']['tmp_name'], "$dir1/$dir2/$new_name2");
} else {

}


// -----------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------


$ext3 = strtolower(substr($_FILES['img3']['name'], -4)); //Pegando extensão do arquivo
$new_name3 = $dir2 . '3' . $ext3;

$extjpeg3 = strtolower(substr($_FILES['img3']['name'], -5));
$new_namejpeg3 = $dir2 . '3' . $extjpeg3;

if ($ext3 == ".jpg") {

    move_uploaded_file($_FILES['img3']['tmp_name'], "$dir1/$dir2/$new_name3");
} elseif ($extjpeg3 == ".jpeg") {

    move_uploaded_file($_FILES['img3']['tmp_name'], "$dir1/$dir2/$new_namejpeg3");
} elseif ($ext3 == ".png") {

    move_uploaded_file($_FILES['img3']['tmp_name'], "$dir1/$dir2/$new_name3");
} else {

}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Galeria</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            background: linear-gradient(-135deg, #9AECDB, #F8EFBA);
        }

        .c1 {
            background-image: url(Cômodos/Cozinha/Cozinha1);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .c2 {
            background-image: url(Cômodos/Cozinha/Cozinha2);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .c3 {
            background-image: url(Cômodos/Cozinha/Cozinha3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .q1 {
            background-image: url(Cômodos/Quarto/Quarto1);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .q2 {
            background-image: url(Cômodos/Quarto/Quarto2);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .q3 {
            background-image: url(Cômodos/Quarto/Quarto3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .s1 {
            background-image: url(Cômodos/Sala/Sala1);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .s2 {
            background-image: url(Cômodos/Sala/Sala2);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .s3 {
            background-image: url(Cômodos/Sala/Sala3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .b1 {
            background-image: url(Cômodos/Banheiro/Banheiro1);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .b2 {
            background-image: url(Cômodos/Banheiro/Banheiro2);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .b3 {
            background-image: url(Cômodos/Banheiro/Banheiro3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .g1 {
            background-image: url(Cômodos/Garagem/Garagem1);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .g2 {
            background-image: url(Cômodos/Garagem/Garagem2);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .g3 {
            background-image: url(Cômodos/Garagem/Garagem3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .col {
            border: 5px solid #2C3A47;
            height: 260px;
            margin: 10px;
            position: relative;
            background-size: cover;
        }

        .container {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            font-size: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bt {
        display: inline-block;
        padding: 15px 25px;
        font-size: 18px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        margin: 20px;
        

    }

    .bt:hover {
        cursor: pointer;
        background-color: #3e8e41
    }

    .bt:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
    </style>
</head>

<body>
    <div class="container">
        <h1> <b>Galeria</b> </h1>
        <hr>
        <div class="row">
            <form enctype="multipart/form-data" action="index.php">
                <h2> Cozinha </h2>
            </form>
            <div></div>
            <div class="col c1"></div>
            <div class="col c2"></div>
            <div class="col c3"></div>
            <div></div>
            <form enctype="multipart/form-data"  method="POST">
                <button class="bt" type="submit" name="validar" value="989" >Excluir Cozinhas</button>
            </form>
        </div>
        <hr>
        <h2> Quarto </h2>
        <div class="row">
            <div></div>
            <div class="col q1"></div>
            <div class="col q2"></div>
            <div class="col q3"></div>
            <div></div>
            <form enctype="multipart/form-data"  method="POST">
                <button class="bt" type="submit" name="quarto" value="444">Excluir Quartos</button>
            </form>
        </div>
        <hr>
        <h2> Sala </h2>
        <div class="row">
            <div></div>
            <div class="col s1"></div>
            <div class="col s2"></div>
            <div class="col s3"></div>
            <div></div>
            <form enctype="multipart/form-data"  method="POST">
                <button class="bt" type="submit" name="sala" value="4444">Excluir Salas</button>
            </form>
        </div> 
        <hr>
        <h2> Garagem </h2>
        <div class="row">
            <div></div>
            <div class="col g1"></div>
            <div class="col g2"></div>
            <div class="col g3"></div>
            <div></div>
            <form enctype="multipart/form-data"  method="POST">
                <button class="bt" type="submit" name="garagem" value="4">Excluir Garagens</button>
            </form>
        </div> 
        <hr>
        <h2> Banheiro </h2>
        <div class="row">
            <div></div>
            <div class="col b1"></div>
            <div class="col b2"></div>
            <div class="col b3"></div>
            <div></div>
            <form enctype="multipart/form-data"  method="POST">
                <button class="bt" type="submit" name="banheiro" value="2">Excluir Banheiros</button>
            </form>
        </div> 
    </div>

</body>
</html>

<?php
error_reporting(0);
ini_set("display_errors", 0 );

if(isset($_POST['validar'])){
    $valida = $_POST['validar'];
    if($valida == 989){
        $cozinha = scandir("Cômodos/Cozinha");
        array_shift($cozinha);
        array_shift($cozinha);
        foreach($cozinha as $linha){
            fopen("Cômodos/Cozinha/$linha",'a');
            unlink("Cômodos/Cozinha/$linha");
        }
        rmdir("Cômodos/Cozinha");
        echo  "<script>alert('Cozinha Apagada Com Sucesso!');</script>";
    }
}

if(isset($_POST['quarto'])){
    $valida2 = $_POST['quarto'];
    if($valida2 == 444){
        $quarto = scandir("Cômodos/Quarto");
        array_shift($quarto);
        array_shift($quarto);
        foreach($quarto as $linha2){
            fopen("Cômodos/Quarto/$linha2",'a');
            unlink("Cômodos/Quarto/$linha2");
        }
        rmdir("Cômodos/Quarto");
        echo  "<script>alert('Quarto Apagado Com Sucesso!');</script>";
    }
}

if(isset($_POST['sala'])){
    $valida3 = $_POST['sala'];
    if($valida3 == 4444){
        $sala = scandir("Cômodos/Sala");
        array_shift($sala);
        array_shift($sala);
        foreach($sala as $linha3){
            fopen("Cômodos/Sala/$linha3",'a');
            unlink("Cômodos/Sala/$linha3");
        }
        rmdir("Cômodos/Sala");
        echo  "<script>alert('Sala Apagada Com Sucesso!');</script>";
    }
}

if(isset($_POST['garagem'])){
    $valida4 = $_POST['garagem'];
    if($valida4 == 4){
        $garagem = scandir("Cômodos/Garagem");
        array_shift($garagem);
        array_shift($garagem);
        foreach($garagem as $linha4){
            fopen("Cômodos/Garagem/$linha4",'a');
            unlink("Cômodos/Garagem/$linha4");
        }
        rmdir("Cômodos/Garagem");
        echo  "<script>alert('Garagem Apagada Com Sucesso!');</script>";
    }
}

if(isset($_POST['banheiro'])){
    $valida5 = $_POST['banheiro'];
    if($valida5 == 2){
        $banheiro = scandir("Cômodos/Banheiro");
        array_shift($banheiro);
        array_shift($banheiro);
        foreach($banheiro as $linha5){
            fopen("Cômodos/Banheiro/$linha5",'a');
            unlink("Cômodos/Banheiro/$linha5");
        }
        rmdir("Cômodos/Banheiro");
        echo  "<script>alert('Banheiro Apagado Com Sucesso!');</script>";
    }
}
?>