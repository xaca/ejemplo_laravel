<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticias;

class NoticiasController extends Controller
{

    function show()
    {
    	$noticias = Noticias::all();
    	//dd($noticias);
    	return view("noticias")->with("noticias",$noticias);
    }
}
