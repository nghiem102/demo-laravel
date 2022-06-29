<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/user/{id}', function ($id) {
    dd($id);
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/register-success', function (Request $request) {

    $requestData = $request->all();
    // dd($requestData);
    return view('register-success',$requestData);
});
Route::get('/user', function (Request $request) {

    // dd($request->all());

    $title = 'danh sách';
    $user = [
        [
            'name' => 'nghiem',
            'age' => 20,
            'address' => 'HN',
            'status'=>1
        ],
        [
            'name' => 'Tuan',
            'age' => 25,
            'address' => 'HN',
            'status'=>0
        ],
    ];

    return view('user',[
        'view_title' => $title,
        'user_list' => $user
    ]);
});
