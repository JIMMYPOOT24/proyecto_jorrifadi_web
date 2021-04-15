<?php

namespace App\Http\Controllers;
 
use App\Models\mdatosempresa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){

        $datos = mdatosempresa::all();
    
       
        return view('home', compact('datos'));

        
       
    }
}
