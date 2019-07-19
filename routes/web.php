<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miPrimeraRuta', function (){
  return 'Creé mi primer ruta en Laravel';
});

Route::get('/esPar/{numero}', function ($num){
  if ($num % 2 == 0) {
    return 'El número es par';
  }
    return 'El número es impar';
});

Route::get('/sumar/{num1}/{num2}/{num3?}', function ($num1, $num2, $num3 = null){
  if (!$num3) {
    return $num1 + $num2;
  }
    return $num1 + $num2 + $num3;
});

Route::get('/peliculas', function (){
  $arrayPeliculas = array(
    ['Iron Man', 9],
    ['Thor', 4],
    ['Captain America', 2],
    ['Hulk', 1],
    ['Black Widow', null]
  );
  return view ('peliculas', compact('arrayPeliculas'));
});

Route::get('/peliculas/{id}', function($id){
  $arrayPeliculas = array(
    ['Iron Man', 9],
    ['Thor', 4],
    ['Captain America', 2],
    ['Hulk', 1],
    ['Black Widow', null]
  );

  foreach ($arrayPeliculas as $pos => $unaPelicula) {
    if ($id == $pos) {
      $pelicula = $unaPelicula;
    }
  }
  if (!isset($pelicula)) {
    $error = 'El id indicado no corresponde a ninguna película';
    return view ('detallePelicula', compact('error'));
  }
  return view ('detallePelicula', compact('pelicula'));
});
