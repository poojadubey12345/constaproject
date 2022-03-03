<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[StudentController::class,'index']);

Route::view('create_student','create_student');
Route::get('getstudents',[StudentController::class,'getstudents']);

//get('create_student',[StudentController::class,'create']);

Route::post('save',[StudentController::class,'saveStudents']);
