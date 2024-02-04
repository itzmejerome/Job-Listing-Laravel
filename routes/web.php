<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\joblists;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('joblists', [
        'heading' => 'Latest Job lists',
        'joblistss' => joblists::all()

    ]);
});

// single 

Route::get('/joblists/{id}', function($id){
 return view('joblist', [
    'listing' => joblists::find($id)
 ]);

});

