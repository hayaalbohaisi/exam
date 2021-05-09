<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});
Route::get('tasks', function () {
    $task = DB::table('table_tasks')->get();
    return view('tasks', compact('tasks'));
});
Route::get('tasks/show/{id}', function ($id) {
    $task = DB::table('table_tasks')->find($id);
    return view('show', compact('task'));
});


Route::get('app', function () {
    return view('layouts.app');
});
Route::get('tasks/show/{id}', function ($id) {
    $task = DB::table('table_tasks')->find($id);
    return view('show', compact('task'));
});
Route::get('app', function () {
    $tasks = DB::table('table_tasks')->get();
    return view('todo', compact('task'));
});
Route::post('store', function (Request $Request) {
    DB::table('table_tasks')->insert([
        'title' => $Request->title->title
    ]);
    // return redirect()->back();
});
Route::get('get', function () {
    DB::table('table_tasks')->delete();
    DB::table('table_tasks')->where('votes', '>', 100)->delete();
});
