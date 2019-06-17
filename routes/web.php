<?php
use Illuminate\Support\Facades\DB;

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
    return view('inicio');
});

Route::get('/persona', function()
{
    $personas=DB::table('personas')->get();
    return view("personas")->with("personas",$personas);
} );

Route::get('/persona/{id}', function($id)
{
    return view("personas")->with("personas",DB::table('personas')->where('id',$id)->get());
} );

Route::get('/correo', function()
{
    return view("correos")->with("correos",DB::table('correo')->get());
});