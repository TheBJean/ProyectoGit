<?php

namespace App\Controllers;

// Todo dentro de una misma clase
class Home extends BaseController
{
    // Funcion para ir a Login index de la carpeta view
    public function index(): string
    {
        return view('Login/index');
    }
    // Funcion para ir a Comrpas index2 de carpeta view
    public function compras(): string
    {
        return view('Compras/index2');
    }
}
