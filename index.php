<?php
date_default_timezone_set('America/Lima');

require_once 'config/default.php';

spl_autoload_register(function($clase){
    $tipomodulo = explode('_',$clase);
    switch($tipomodulo[1]){
        case 'Controller':
            require_once 'controller/'.$clase.'.php';
            break;
        case 'Model':
            require_once 'model/'.$clase.'.php';
            break;
        default:
            echo 'No Encontrado';
            error_log('No se encontro la instancia de referencia');
            break;
    }
});

$plantillaHt = new Plantilla_Controller;

$plantillaHt -> Ctr_MostrarPlantilla();