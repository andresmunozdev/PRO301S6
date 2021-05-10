<?php
require '../Models/Registro.php';

class RegistroController extends Registro{

public function RegistroView()
{
    require '../Views/registro.php';
}



}

if(isset($_GET['action']) && $_GET['action']=='Registro'){
    $instanciacontrolador = new RegistroController();
    $instanciacontrolador -> RegistroView();




}






?>