<?php
// TOBIAS E HERICK

$dir1 = 'Cômodos';
$dir2 = $_POST['diretorio'];

if (is_dir($dir1)) {
} else {
    mkdir('Cômodos');
}
if (is_dir("$dir1/$dir2")) {
    // Não Vai Fazer Nada, Pois Já Existe Essa Pasta
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
    echo '<div class= i1 >  </div> ';
    echo '<div class= i1 >  </div> ';
    echo '<div class= i1 > Imagem 1: </div> ';
    echo '<div class= i1 > Upload Realizado! </div> ';
    move_uploaded_file($_FILES['img1']['tmp_name'], "$dir1/$dir2/$new_name");
} elseif ($extjpeg == ".jpeg") {
    echo '<div class= i1 >  </div> ';
    echo '<div class= i1 >  </div> ';
    echo '<div class= i1 > Imagem 1: </div> ';
    echo '<div class= i1 > Upload Realizado! </div> ';
    move_uploaded_file($_FILES['img1']['tmp_name'], "$dir1/$dir2/$new_namejpeg");
} elseif ($ext == ".png") {
    echo '<div class= i1 >  </div> ';
    echo '<div class= i1 >  </div> ';
    echo '<div class= i1 > Imagem 1: </div> ';
    echo '<div class= i1 > Upload Realizado! </div> ';
    move_uploaded_file($_FILES['img1']['tmp_name'], "$dir1/$dir2/$new_name");
} else {
    echo '<div class= i1 >  </div> ';
    echo '<div class= i1 >  </div> ';
    echo '<div class= i1 > Imagem 1: </div> ';
    echo '<div class= i1 > Upload Não Realizado! (verifique se a extensão do arquivo é Jpg, Png ou Jpeg). </div> ';
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
    echo ' <div class= i1 > ___________________ </div> ';
    echo '<div class= besteira >  </div> ';
    echo '<div class= i1 > Imagem 2: </div> ';
    echo '<div class= i1 > Upload Realizado! </div> ';
    move_uploaded_file($_FILES['img2']['tmp_name'], "$dir1/$dir2/$new_name2");
} elseif ($extjpeg2 == ".jpeg") {
    echo '<div class= i1 > ___________________ </div> ';
    echo '<div class= besteira >  </div> ';
    echo '<div class= i1 > Imagem 2: </div> ';
    echo '<div class= i1 > Upload Realizado! </div> ';
    move_uploaded_file($_FILES['img2']['tmp_name'], "$dir1/$dir2/$new_namejpeg2");
} elseif ($ext2 == ".png") {
    echo '<div class= i1 > ___________________ </div> ';
    echo '<div class= besteira >  </div> ';
    echo '<div class= i1 > Imagem 2: </div> ';
    echo '<div class= i1 > Upload Realizado! </div> ';
    move_uploaded_file($_FILES['img2']['tmp_name'], "$dir1/$dir2/$new_name2");
} else {
    echo '<div class= i1 > ___________________ </div> ';
    echo '<div class= besteira >  </div> ';
    echo '<div class= i1 > Imagem 2: </div> ';
    echo '<div class= i1 > Upload Não Realizado! (verifique se a extensão do arquivo é Jpg, Png ou Jpeg). </div> ';
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
    echo '<div class= i1 > ___________________ </div> ';
    echo '<div class= i1 > Imagem 3: </div> ';
    echo '<div class= i1 > Upload Realizado! </div> ';
    echo '<div class= i1 >  </div> ';
    move_uploaded_file($_FILES['img3']['tmp_name'], "$dir1/$dir2/$new_name3");
} elseif ($extjpeg3 == ".jpeg") {
    echo '<div class= i1 > ___________________ </div> ';
    echo '<div class= i1 > Imagem 3: </div> ';
    echo '<div class= i1 > Upload Realizado! </div> ';
    echo '<div class= i1 >  </div> ';
    move_uploaded_file($_FILES['img3']['tmp_name'], "$dir1/$dir2/$new_namejpeg3");
} elseif ($ext3 == ".png") {
    echo '<div class= i1 > ___________________ </div> ';
    echo '<div class= i1 > Imagem 3: </div> ';
    echo '<div class= i1 > Upload Realizado! </div> ';
    echo '<div class= i1 >  </div> ';
    move_uploaded_file($_FILES['img3']['tmp_name'], "$dir1/$dir2/$new_name3");
} else {
    echo '<div class= i1 > ___________________ </div> ';
    echo '<div class= i1 > Imagem 3: </div> ';
    echo '<div class= i1 > Upload Não Realizado! (verifique se a extensão do arquivo é Jpg, Png ou Jpeg). </div> ';
}
echo '<div class= i1 ></div> ';
echo '<div class= i1 ></div> ';
echo '<a href="index.php"> <div class= bt > Retornar </div> </a>';
echo '<a href="galeria.php"> <div class= bt > Avançar </div> </a>';


?>
<style>
    body {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        background: linear-gradient(-135deg, #c850c0, #4158d0);
        color: #2c3e50;
        font-size: 15px;
        
    }

    .i1 {
        background-color: #fff;
        position: relative;
        bottom: -130px;
        left: 300px;
        height: 28px;
        width: 50%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        font-size: 20px;
    }

    .besteira {
        background-color: #fff;
        position: relative;
        bottom: -130px;
        left: 300px;
        height: 23px;
        width: 50%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        font-size: 20px;
    }

    .bt {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
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
        position: relative;
        bottom: -130px;
        left: 460px;
        

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