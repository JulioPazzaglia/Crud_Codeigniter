<?php

namespace App\Controllers;

class Tienda extends BaseController
{
    public function index()
    {
        $data['productos'] = 
        [
          ['nombre' => 'Camisa', 'precio' => 5000],
          ['nombre' => 'Pantalon', 'precio' => 30000],
          ['nombre' => 'Zapatillas', 'precio' => 15000],


        ];
        return view('tienda', $data );
        
    }
}
