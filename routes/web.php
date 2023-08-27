<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/home', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

route::get('/user', function () {
    return view('user');
});
route::get('/', function () {
    return view('layouts/home');
});

route::get('/more', function () {
    return view('layouts/more');
});

route::get('/about', function () {
    return view('layouts/about');
});

route::get('/json', function () {
    return view('json');
});

//array funciton
function data(){
    return [
        1 => ['name'=>"tofayel",'phone'=>"01998384",'city'=>"Rajshahi"],
        2 => ['name'=>"tel",'phone'=>"0197567384","city"=>"dinaupur"],
        3 => ['name'=>"tyel",'phone'=>"097867998384","city"=>"Bogura"],
        4 => ['name'=>"tofyel",'phone'=>"009868384","city"=>"Dhaka"],
    ];
}

route::get('/datapass', function () {
    $w = "world";
    //     return view('datapass', [
//         'data' => $data,
//         "data2" => $w
//     ]);


//     return view('datapass')
//     ->with('data', $data)
//     ->with("data2",'<script> alert("Hello world");</script>');

        $datas=data();
        return view('datapass',['datas'=>$datas]);
});

route::get('/data/{id}', function ($id) {
    $datas=data();
    $data=$datas[$id];
    return view('userFile',['id'=>$data]);
})->name("user_file");