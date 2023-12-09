<?php

$valor = empty($_GET['valor']) ? '' : $_GET['valor'];
// echo $valor;

    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/Consulta2Model.php";
    }
    elseif(file_exists("./Db/Con1Db.php")){
        require_once "./Db/Con1Db.php";
    }

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from coches where ide_coc = $valor order by mar_coc, mod_coc, aut_coc ";
    $data = $oData->getData1($sql);

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
        
        foreach ($data as $row)
        {
            echo
            "

            <form id='formEdicion1' class='bloque1'>
                    <input type='text' id='textoEdicion1' name='textoEdicion1' class='campo1' value='$row->ide_coc' disabled>
                    <input type='text' id='textoEdicion2' name='textoEdicion2' value='$row->mar_coc' class='campo1' >
                    <input type='text' id='textoEdicion3' name='textoEdicion3' value='$row->mod_coc' class='campo1' >
                    <input type='number' id='textoEdicion4' name='textoEdicion4' value='$row->aut_coc' class='campo1' placeholder='Autonomía'>
                    <input type='submit' id='botonInsercion1' name='botonInsercion1' value='Actualizar' class='boton1'>
            </form>

            ";

            //echo 'Test: '$row->rut_coc;
        }
    }

?>