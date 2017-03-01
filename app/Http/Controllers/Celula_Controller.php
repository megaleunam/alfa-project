<?php

namespace App\Http\Controllers;
use App\Celula;
use Illuminate\Http\Request;

class Celula_Controller extends Controller
{
		public function getDatos()
    {
		$datos = Celula::paginate();
		return view('Celula/celulas', compact('datos'));
	}
}
