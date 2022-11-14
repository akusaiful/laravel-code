<?php

use Illuminate\Http\Request;
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


//First Route

Route::get('/', function () {
    return view('hello',[
        'name' => 'Farhan',
        'age' => '24'
    ]);
});

// Hello laravel
Route::get('/hello-laravel/{name}/{age}', function ($name, $age) {
    // return view('hello', [
    //     'name' => $name,
    //     'age' => $age
    // ]);
    return view('hello')
        ->with('name', $name)
        ->with('age', $age);
    // return 'Hello ' . $name . " <br /> Age : $age";
});

// Simple Calculator 
// DI - Dependency Injector
Route::get('/calculator/{number}', function (Request $request, $number) {
    // dd($request);
    return view('calculator')->with('number', $request->number);

    // echo "Simple Calculator <br />";

    // foreach(range(1,12) as $key){
    //     echo "$key * $number = " . ($key * $number) . "<br />";
    // }

});
