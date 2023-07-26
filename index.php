<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Examen</title>
</head>
<body>
    <h1> .:FECHA SIGUIENTE:.</h1><br><br>
    <form method="post" action="index.php">
        <label> DIA</label>
        <select  size="1" name="cmbDia">
            <option value="seleccione">-- Seleccione --</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
        <br><br><label> MES</label>
        <select  size="1" name="cmbMes">
        <option value="seleccione">-- Seleccione --</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <br><br><label> AÑO</label>
        <input type="text" name="txtAnio">
        <br><br><input type="reset" value="NUEVO">
        <input type="submit" id="btn-calcular" value="CALCULAR">
    </form>
    <br><br><br><hr><br><br>
    <?php
        @$dia = $_POST["cmbDia"];
        @$mes = $_POST["cmbMes"];
        @$anio = $_POST["txtAnio"];
        @$a = 28;

        switch($mes){
            case "1":
                if(isset($dia) && $dia=="31"){
                    $ndia = 1;
                    $nmes = 1 + 1;
                    echo "La fecha es: $ndia / $nmes / $anio";
                }else{
                    $ndia = $dia + 1;
                    echo "La fecha es: $ndia / $mes / $anio";
                }
                break;
            case "2":
                if($anio % 4 == 0){
                    if(isset($dia) && $dia=="30" or  $dia=="31"){
                        echo "Dia invalido";
                    }else{
                        if(isset($dia) && $dia=="29"){
                            $ndia = 1;
                            $nmes = 2 + 1;
                            echo "La fecha es: $ndia / $nmes / $anio";
                        }else{
                            $ndia = $dia + 1;
                            echo "La fecha es: $ndia / $mes / $anio";
                        }
                    }
                }else{
                    if(isset($dia) &&  $dia=="29" or $dia=="30" or  $dia=="31"){
                        echo "Dia invalido";
                    }else{
                        if(isset($dia) && $dia=="28"){
                            $ndia = 1;
                            $nmes = 2 + 1;
                            echo "La fecha es: $ndia / $nmes / $anio";
                        }else{
                            $ndia = $dia + 1;
                            echo "La fecha es: $ndia / $mes / $anio";
                        }
                    }
                } 
                
                break;
            case "3":
                if(isset($dia) && $dia=="31"){
                    $ndia = 1;
                    $nmes = 3 + 1;
                    echo "La fecha es: $ndia / $nmes / $anio";
                }else{
                    $ndia = $dia + 1;
                    echo "La fecha es: $ndia / $mes / $anio";
                }
                break;
            case "4":
                if(isset($dia) && $dia=="31"){
                    echo "Dia invalido";
                }else{
                    if(isset($dia) && $dia=="30"){
                        $ndia = 1;
                        $nmes = 4 + 1;
                        echo "La fecha es: $ndia / $nmes / $anio";
                    }else{
                        $ndia = $dia + 1;
                        echo "La fecha es: $ndia / $mes / $anio";
                    }
                }
                break;
            case "5":
                if(isset($dia) && $dia=="31"){
                    $ndia = 1;
                    $nmes = 5 + 1;
                    echo "La fecha es: $ndia / $nmes / $anio";
                }else{
                    $ndia = $dia + 1;
                    echo "La fecha es: $ndia / $mes / $anio";
                }
                break;
            case "6":
                if(isset($dia) && $dia=="31"){
                    echo "Dia invalido";
                }else{
                    if(isset($dia) && $dia=="30"){
                        $ndia = 1;
                        $nmes = 6 + 1;
                        echo "La fecha es: $ndia / $nmes / $anio";
                    }else{
                        $ndia = $dia + 1;
                        echo "La fecha es: $ndia / $mes / $anio";
                    }
                }
                break;
            case "7":
                if(isset($dia) && $dia=="31"){
                    $ndia = 1;
                    $nmes = 7 + 1;
                    echo "La fecha es: $ndia / $nmes / $anio";
                }else{
                    $ndia = $dia + 1;
                    echo "La fecha es: $ndia / $mes / $anio";
                }
                break;
            case "8":
                if(isset($dia) && $dia=="31"){
                    $ndia = 1;
                    $nmes = 8 + 1;
                    echo "La fecha  es: $ndia / $nmes / $anio";
                }else{
                    $ndia = $dia + 1;
                    echo "La fecha es: $ndia / $mes / $anio";
                }
                break;
            case "9":
                if(isset($dia) && $dia=="31"){
                    echo "Dia invalido";
                }else{
                    if(isset($dia) && $dia=="30"){
                        $ndia = 1;
                        $nmes = 9 + 1;
                        echo "La fecha es: $ndia / $nmes / $anio";
                    }else{
                        $ndia = $dia + 1;
                        echo "La fecha es: $ndia / $mes / $anio";
                    }
                }
                break;
            case "10":
                if(isset($dia) && $dia=="31"){
                    $ndia = 1;
                    $nmes = 10 + 1;
                    echo "La fecha es: $ndia / $nmes / $anio";
                }else{
                    $ndia = $dia + 1;
                    echo "La fecha es: $ndia / $mes / $anio";
                }
                break;
            case "11":
                if(isset($dia) && $dia=="31"){
                    echo "Dia invalido";
                }else{
                    if(isset($dia) && $dia=="30"){
                        $ndia = 1;
                        $nmes = 11 + 1;
                        echo "La fecha es: $ndia / $nmes / $anio";
                    }else{
                        $ndia = $dia + 1;
                        echo "La fecha es: $ndia / $mes / $anio";
                    }
                }
                break;
            case "12":
                if(isset($dia) && $dia=="31"){
                    $ndia = 1;
                    $nmes = 1;
                    $nanio = $anio  +  1;
                    echo "La fecha es: $ndia / $nmes / $nanio";
                }else{
                    $ndia = $dia + 1;
                    echo "La fecha es: $ndia / $mes / $anio";
                }
                break;
            default:
                echo "<br> No ha seleccionado ";
        }
    ?>
</body>
</html>