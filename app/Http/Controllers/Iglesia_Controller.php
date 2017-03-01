<?php

namespace App\Http\Controllers;
use App\Iglesia;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class Iglesia_Controller extends Controller
{
     public function getDatos()
    {
         $datos = Iglesia::paginate();
        return view('Iglesia/iglesias', compact('datos'));
    }

 	public function create()
 	{
 		return view('Iglesia/iglesiaAgg');

 	}
 	public function store(Request $request)
 	{
       //Iglesia::create($request->all());

       $igle = new Iglesia($request->all());
       $igle->save();

       return view('Iglesia/iglesias');

 	}
}
