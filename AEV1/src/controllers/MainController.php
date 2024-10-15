<?php

namespace AP33\Controllers;

use AP33\Core\DataBase;
use AP33\Models\Tareas;
use AP33\Views\ListadoTareas;

class MainController
{

    public function main(){
        //Creamos una conexión a la BB.DD. e instanciamos el modelo Tarea para poder acceder a los datos.
        $tarea = new Empresa(new DataBase());
        //Ahora recibimos todos los datos que existan en la tabla.
        new ListadoTareas($tarea->findAll());
    }

    /**
     * Esta función nos permite acaparar cualquier ruta que no este definida previamente para no mostrar códigos de error
     * @return void
     */
    function default(){
        echo "La ruta que buscas no existe.\n";
    }
}