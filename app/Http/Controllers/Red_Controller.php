<?php

namespace App\Http\Controllers;
use App\Red;
use Illuminate\Http\Request;

class Red_Controller extends Controller
{
    public function getDatos()
    {
         $datos = Red::paginate();
        return view('Red/redes', compact('datos'));
    }
}
