<?php

namespace App\Controllers;

// Todo dentro de una misma clase
class Cindex2 extends BaseController
{

    // Funcion para ir a Comrpas index2 de carpeta view
    public function index2(): string
    {
        return view('Compras/index2');
    }
}
