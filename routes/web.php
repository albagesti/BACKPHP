<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ClassController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');



Route::get('alumno', [AlumnoController::class, 'index']);

Route::get('alumno/curso/{id_course}', [AlumnoController::class, 'show']);


//CRUD TEACHERS

Route::get('/teachers', [TeachersController::class, 'index'])->middleware('auth.admin');

Route::post('/teachers/create', [TeachersController::class, 'store'])->middleware('auth.admin');

Route::get('/teachers/edit/{id_teacher}', [TeachersController::class, 'edit'])->middleware('auth.admin');

Route::put('/teachers/edit/{id_teacher}', [TeachersController::class, 'update'])->middleware('auth.admin');

Route::get('/teachers/delete/{id_teacher}', [TeachersController::class, 'delete'])->middleware('auth.admin');


//CRUD CURSOS

Route::get('/cursos', [CoursesController::class, 'index'])->middleware('auth.admin');

Route::get('/cursos/create', [CoursesController::class, 'create'])->middleware('auth.admin');

Route::post('/cursos', [CoursesController::class, 'store'])->middleware('auth.admin');

Route::get('/cursos/edit/{id_course}', [CoursesController::class, 'edit'])->middleware('auth.admin');

Route::put('/cursos/edit/{id_course}', [CoursesController::class, 'update'])->middleware('auth.admin');

Route::get('/cursos/delete/{id_course}', [CoursesController::class, 'delete'])->middleware('auth.admin');

// CLASES

Route::get('/clases',[ClassController::class, 'index'])->middleware('auth.admin');

Route::get('/clases/create', [ClassController::class, 'create'])->middleware('auth.admin');

Route::post('/clases', [ClassController::class, 'store'])->middleware('auth.admin');

Route::get('/clases/edit/{id_class}', [ClassController::class, 'edit'])->middleware('auth.admin');

Route::put('/clases/edit/{id_class}', [ClassController::class, 'update'])->middleware('auth.admin');

Route::get('/clases/delete/{id_class}', [ClassController::class, 'delete'])->middleware('auth.admin');


Route::get('/perfil', function () {
    return view('perfil');
});


