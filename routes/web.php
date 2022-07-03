<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use Illuminate\Http\Request;
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
Route::get('/feature',[FeatureController::class,"getAll"]);
Route::get("config",function(Request $request){
    $content=File::get($_SERVER["DOCUMENT_ROOT"]."/config.json");
    return response()->json($content);
});
Route::get('/feature/{id}',[FeatureController::class,"getFirstByCount"])->where('id','[0-9]+');
