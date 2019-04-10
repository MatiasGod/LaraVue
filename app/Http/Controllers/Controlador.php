<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function index(Request $request){
        return array(
            array('id' => 1 , 'name' => 'tarea uno'),
            array('id' => 2 , 'name' => 'tarea dos'),
            array('id' => 3 , 'name' => 'tarea tres')
        );
        
    }
}
