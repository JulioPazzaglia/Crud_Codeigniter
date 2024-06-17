<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //echo "Hola mundo";

        $data['informacion'] = 'Esto es una ejemplo para mostrar la información en la vista';
        return view('home', $data );
        
    }
}
