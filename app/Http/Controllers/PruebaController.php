<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use DB;

class PruebaController extends Controller
{
    //
    public function show($id)
    {
    	//$datos = DB::table('usuarios')->where('id',$id)->first();
    	//$datos = Usuarios::where('id',$id)->firstOrfail();
    	//dd($datos);
    	/*if(!$datos)
    	{
    		abort(404);
    	}*/

    	//return $datos->correo;
    	//$datos = DB::table('usuarios')->where('id',$id)->first();
    	//dd($datos);
    	$datos = Usuarios::where('id',$id)->firstOrfail();
    	/*if(!$datos)
    	{
    		abort(404);
    	}*/
    	return $datos->correo;
    }
}
