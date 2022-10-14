
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Galeira</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            background: linear-gradient(-135deg, #9AECDB, #F8EFBA);
        }

        .b1 {
            background-image: url(Cômodos/Cozinha/Cozinha1);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .b2 {
            background-image: url(Cômodos/Cozinha/Cozinha2);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .b3 {
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

        .col {
            border: 5px solid #2C3A47;
            height: 260px;
            margin: 10px;
            position: relative;
            background-size: cover;
        }

        .container {
            text-align: center;
            font-family: monospace;
        }

        h1 {
            font-size: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1> <b>Imobiliária</b> </h1>
        <hr>
        <div class="row">
            <form enctype="multipart/form-data" action="index.php">
                <h2> Cozinha </h2>
                <button type="submit">Adicionar Novas Imagens</button>
            </form>
            <div></div>
            <div class="col b1"></div>
            <div class="col b2"></div>
            <div class="col b3"></div>
            <div></div>
            <form enctype="multipart/form-data" action="delC.php" method="POST">
                <button type="submit">Excluir Cozinhas</button>
            </form>
        </div>
        <hr>
        <div class="row">
            <div></div>
            <div class="col q1"></div>
            <div class="col q2"></div>
            <div class="col q3"></div>
            <div></div>
            <form enctype="multipart/form-data" action="delQ.php" method="POST">
                <button type="submit">Excluir Quartos</button>
            </form>
        </div>
        <hr>
        <div class="row">
            <div></div>
            <div class="col s1"></div>
            <div class="col s2"></div>
            <div class="col s3"></div>
            <div></div>
            <form enctype="multipart/form-data" action="delS.php" method="POST">
                <button type="submit">Excluir Salas</button>
            </form>
        </div> 


    </div>
</body>

</html>