<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
    //return request("usuario");
    //dd(request("usuario"));
    //return ["mensaje"=>"admin","estado"=>true,"libros"=>["123"=>"Libro 1","245"=>"Libro 2"]];
    //$arreglo = array();
    /*array_push($arreglo, "valor 1");
    array_push($arreglo, "valor 2");
    array_push($arreglo, "valor 3");*/
    //$arreglo["123"] = "valor 1";

    //dd($arreglo);

    //return $arreglo;
//});
/*Route::get('ejemplo',function(){
	$dato = request("dato");
	return view("ejemplo",["dato"=>$dato]);
});*/


Route::get('/prueba/{id_producto}', function ($id_producto) {
	//return $id_producto;
	/*$id = request("id");
    return view('prueba',["id"=>$id]);*/
    //return view('prueba',["id_producto"=>$id_producto]);

});

Route::get('/ejemplo/{id}', 'PruebaController@show');

Route::get('/', 'NoticiasController@show');
