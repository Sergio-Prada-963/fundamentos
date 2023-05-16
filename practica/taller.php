<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estuduantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="estudiantes.css">


</head>
<body>
    <div class="caja">
        <h2>notas Estudiantes</h2>
        <form action="taller.php" method="POST">
        <label for="inputPassword5" class="form-label">nota 1 </label>
        <input type="number" id="inputPassword5" class="form-control" name="nota1" aria-labelledby="passwordHelpBlock" step="0.00001">
        <label for="inputPassword5" class="form-label">nota 2</label>
        <input type="number" id="inputPassword5" class="form-control" name="nota2" aria-labelledby="passwordHelpBlock" step="0.00001">
        <label for="inputPassword5" class="form-label">nota 3</label>
        <input type="number" id="inputPassword5" class="form-control" name="nota3" aria-labelledby="passwordHelpBlock" step="0.00001">
        <button type="submit" class="btn btn-warning m-2">calcular</button>
        <button type="submit" class="btn btn-danger m-2">reiniciar</button>
        
        </form>
        <?php

                if($_POST){
                    $nota1= $_POST["nota1"];
                    $nota2= $_POST["nota2"];
                    $nota3= $_POST["nota3"];

                /*    $nota11= floatval($nota1);
                    $nota22=floatval($nota2);
                    $nota33= floatval($nota3); */



                    $notaTotal = ($nota1+$nota2+$nota3)/3;

                    if($notaTotal>3.9){
                        echo "Becado";
                    }
                    else{
                        echo '<h1 style="color:red;margin:2rem">Estudiue</h1>';
                    };
                }


                ?>
   

    </div>
    <div class="caja">
    <form action="taller.php" method="POST">
                <label >Digite un namber</label>
    <input type="number" class="form-control" name="numero" aria-labelledby="passwordHelpBlock" step="0.00001">
    <button type="submit" class="btn btn-warning m-2">enviar</button>

    </form>
    <?php

    $numero = $_POST["numero"];
    $calculo = $numero%2;
    if($_POST){
        if( $calculo==0){
            echo '<h1 style="color:green;margin:2rem">es par</h1>';
        }else{
            echo '<h1 style="color:red;margin:2rem">es impar </h1>';
        }
        
        
        if($numero>10){
            echo '<h1 style="color:green;margin:2rem">es mayor a 10 </h1>';
        }else{
            echo '<h1 style="color:red;margin:2rem">es menor a 10 </h1>';
        }
    }


?>


                
       
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html> 