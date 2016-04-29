<?php
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// CACHE

Route::post('cache/{key}/{value}', function ($key, $value) {
    $expiresAt = Carbon::now()->addMinutes(5);
    Cache::put($key, $value, $expiresAt);

    return response()->json(true);
});
Route::get('cache/{key}', function ($key) {
    $data = Cache::get($key);

    return response()->json(compact('data'));
});
Route::delete('cache', function () {
    Cache::flush();

    return response()->json(true);
});

// SESSION

Route::put('session/counter', function (Request $request) {
    $counter = $request->session()->get('counter', 0);
    $request->session()->put('counter', $counter + 1);

    return response()->json(true);
});
Route::get('session/counter', function (Request $request) {
    $data = $request->session()->get('counter', 0);

    return response()->json(compact('data'));
});
Route::delete('session/counter', function (Request $request) {
    $request->session()->remove('counter');

    return response()->json(true);
});
Route::get('session/all', function (Request $request) {
    $data = $request->session()->all();

    return response()->json(compact('data'));
});
Route::get('session/debug', function (Request $request) {
    ob_start();
    dd($request->session());
    $data = ob_get_flush();

    return response()->json(compact('data'));
});