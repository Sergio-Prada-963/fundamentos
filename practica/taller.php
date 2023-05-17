<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estuduantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./estudiantes.css">
</head>
<body>
    <!-- Punto #1 -->
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
        </form>
        <?php
            if($_POST){
                $nota1= $_POST["nota1"];
                $nota2= $_POST["nota2"];
                $nota3= $_POST["nota3"];
                $notaTotal = ($nota1+$nota2+$nota3)/3;
                if($notaTotal>=3.9){
                    echo "Becado";
                }else{
                    echo '<h1 style="color:red;margin:2rem">Estudiue</h1>';
                };
            }
        ?>
    </div>
    <!-- Punto #2 -->
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
                };

                if($numero>=10){
                    echo '<h1 style="color:green;margin:2rem">es mayor a 10 </h1>';
                }else{
                    echo '<h1 style="color:red;margin:2rem">es menor a 10 </h1>';
                }
            }
        ?> 
    </div>
    <!-- Punto #3 -->
    <div class="caja">
        <form action="taller.php" method="POST">
            <label>Digite la resistencia</label>
            <input type="number" class="form-control" placeholder="Digite la resistencia" step="0.00001" name="resistencia">
            <label>Digite la intencidad de la Corriente</label>
            <input type="number" placeholder="digite La Intencidad de ka corriente" class="form-control" step="0.00001" name="intencidad">
            <button type="submit" class="btn btn-warning m-2">calcular</button>
        </form>
        <?php
        $resistencia = $_POST["resistencia"];
        $intencidad = $_POST["intencidad"];
        if($_POST){
            $voltaje = $resistencia * $intencidad;
            echo "El voltaje es de $voltaje V";
        };
        ?>
    </div>
    <!-- Punto #4 -->
    <div class="caja">
        <form action="taller.php" method="POST" >
            <label>Persona #1</label>
            <input type="text" placeholder="Digite el nombre de la persona" class="form-control" name="persona1">
            <input type="number" placeholder="digite la edad de la persona" class="form-control" name="ePersona1" step="0.0001">
            <label>Persona #2</label>
            <input type="text" placeholder="Digite el nombre de la persona" class="form-control" name="persona2">
            <input type="number" placeholder="digite la edad de la persona" class="form-control" name="ePersona2" step="0.0001">
            <label>Persona #3</label>
            <input type="text" placeholder="Digite el nombre de la persona" class="form-control" name="persona3">
            <input type="number" placeholder="digite la edad de la persona" class="form-control" name="ePersona3" step="0.0001">
            <button type="submit" class="btn btn-warning m-2">calcular</button>
        </form>
        <?php
        $persona1 = $_POST["persona1"];
        $persona2 = $_POST["persona2"];
        $persona3 = $_POST["persona3"];
        $ePersona1 = $_POST["ePersona1"];
        $ePersona2 = $_POST["ePersona2"];
        $ePersona3 = $_POST["ePersona3"];
        $array = [
            $persona1 => $ePersona1,
            $persona2 => $ePersona2,
            $persona3 => $ePersona3
        ];
        if($_POST){
            $posicion = max($array);
            if($posicion === $ePersona1){
                echo "la persona $persona1 tiene mayor edad: $ePersona1";
            }elseif($posicion === $ePersona2){
                echo "la persona $persona2 tiene mayor edad: $ePersona2";
            }else{
                echo "la persona $persona3 tiene mayor edad: $ePersona3";
            };
        };
        ?>
    </div>
    <!-- punto #5 -->
    <div class="caja">
        <form action="taller.php" method="POST" >
            <label>Ingrese Un Nuemero</label>
            <input type="number" placeholder="digite un numero" class="form-control" name="numero1" step="0.0001">
            <label>Ingrese Otro Numero</label>
            <input type="number" placeholder="digite otro mumero" class="form-control" name="numero2" step="0.0001">
            <button type="submit" class="btn btn-warning m-2">Calcular</button>
        </form>
        <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
            if($_POST){
                if($numero1 > $numero2){
                    $total1 = $numero1 + $numero2; 
                    echo "el Primero es Mayor, y su suma es: $total1 "; 
                }else{
                    $total2 = $numero1 - $numero2;
                    echo "EL sugundo en Mayor, y su resta es: $total2";
                };
            };
        ?>
    </div>
    <!-- Punto #6 -->
    <div class="caja">
        <form action="taller.php" method="POST" >
            <label>tres estudiantes</label>
            <div class="caja">
                <label>Estudiante #1</label>
                <input type="text" placeholder="Digite el Nombre" class="form-control" name="estu1">
                <select name="Sestu1">
                    <option value="">Ingrese el genero</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
                <input type="number" placeholder="Digite La Nota" class="form-control" name="Nestu1" step="0.00001">
            </div>
            <div class="caja">
                <label>Estudiante #2</label>
                <input type="text" placeholder="Digite el Nombre" class="form-control" name="estu2">
                <select name="Sestu2">
                    <option value="">Ingrese el genero</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
                <input type="number" placeholder="Digite La Nota" class="form-control" name="Nestu2" step="0.00001">
            </div>
            <div class="caja">
                <label>Estudiante #3</label>
                <input type="text" placeholder="Digite el Nombre" class="form-control" name="estu3">
                <select name="Sestu3">
                    <option value="">Ingrese el genero</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
                <input type="number" placeholder="Digite La Nota" class="form-control" name="Nestu3" step="0.00001">
            </div>
            <button type="submit" class="btn btn-warning m-2">Calcular</button>
        </form>
        <?php
            if($_POST){
                /* nombres */
                $estu1 = $_POST["estu1"];
                $estu2 =  $_POST["estu2"];
                $estu3 = $_POST["estu3"];
                $nombre = array("$estu1", "$estu2", "$estu3");
                /* notas */
                $Nestu1 = $_POST["Nestu1"];
                $Nestu2 =  $_POST["Nestu2"];
                $Nestu3 = $_POST["Nestu3"];
                $notas = array("$Nestu1", "$Nestu2", "$Nestu3");
                /* genero */
                $Sestu1 = $_POST["Sestu1"];
                $Sestu2 =  $_POST["Sestu2"];
                $Sestu3 = $_POST["Sestu3"];         
                /* Mayor nota */
                $Mnota = max($notas);
                $Minota = min($notas);
                $posicionM = array_search($Mnota, $notas);
                $posicionMin = array_search($Minota, $notas);
                echo "El Estudiante con mayor nota es: {$nombre[$posicionM]}... con una nota de $Mnota" . "<br>";
                echo "El Estudiante con menor nota es: {$nombre[$posicionMin]}... con una nota de $Minota" . "<br>";
                /* Cuantos Hombres y mujeres */
                if(Sestu1 == "Hombre"){};

            };
        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html> 