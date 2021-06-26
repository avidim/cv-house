<?php

use Illuminate\Support\Facades\Route;
use App\Models\Main;

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
    return view('app');
});

Route::get('/mains', function () {
    request()->validate([
        'search_field' => 'required',
        'option_field' => 'required|not_in:null'
    ]);
    $data = Main::where(request('option_field'), 'REGEXP', request('search_field'))->get();
    return view('table')->with('data', $data);
});
