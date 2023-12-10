<?php

/* INICIO - Tratamiento de los input type='text' */
$textoEdicion1 = empty($_POST['textoEdicion1']) ? '' : $_POST['textoEdicion1'];
$textoEdicion2 = empty($_POST['textoEdicion2']) ? '' : $_POST['textoEdicion2'];
$textoEdicion3 = empty($_POST['textoEdicion3']) ? '' : $_POST['textoEdicion3'];
$textoEdicion4 = empty($_POST['textoEdicion4']) ? '' : $_POST['textoEdicion4'];
// echo $valor;

    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/Insercion1Model.php";
    }
    elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
    }

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    //$sql = "update coches set mar_coc = $textoEdicion1, mod_coc=$textoEdicion2, aut_coc=$textoEdicion3 where ide_coc = $textoEdicion4 ";

    $sql = "UPDATE coches SET mar_coc = '$textoEdicion2', mod_coc = '$textoEdicion3', aut_coc=$textoEdicion4 WHERE ide_coc = $textoEdicion1";
    $data = $oData->setData1($sql);
    //echo $textoEdicion2;

    if(empty($data))
    {
        echo
        "
            <div class='bloque1 negrita'>
                No hay datos.
            </div>
        ";
    }
    else
    {

        //echo $data."<br>";
        
       
    }

?>