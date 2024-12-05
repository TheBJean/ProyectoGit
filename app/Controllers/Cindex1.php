<?php

namespace App\Controllers;

class Cindex1 extends BaseController
{
    // Funcion para ir a Login index de la carpeta view
    public function index(): string
    {
        return view('Login/index');
    }
}
