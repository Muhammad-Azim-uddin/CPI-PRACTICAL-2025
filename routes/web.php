<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\backend\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendHomeController;


Auth::routes();

//*Frontend Routes
Route::get('/', [FrontendHomeController::class, 'home'])->name('home');
Route::get('/department', [FrontendHomeController::class, 'department'])->name('department');
Route::get('/teacher', [FrontendHomeController::class, 'teacher'])->name('teacher');
Route::get('/notice', [FrontendHomeController::class, 'notice'])->name('notice');
Route::get('/contact', [FrontendHomeController::class, 'contact'])->name('contact');


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
Route::delete('/contact/destroy/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::get('/leads-contact', [ContactController::class, 'leadsContact'])->name('contact.leadsContact');

Route::prefix('/dashboard')->middleware(['auth', 'verified'])->name('backend.')->group(function(){
   //*Department Routes
    Route::prefix('/department')->controller(DepartmentController::class)->name('department.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::post('store', [DepartmentController::class, 'store'])->name('store');
        Route::put('/update/{id}', [DepartmentController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [DepartmentController::class, 'destroy'])->name('destroy');
    });



    //*About Routes
    Route::prefix('/about')->controller(AboutController::class)->name('about.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/draft', 'draft')->name('draft');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    //*Teacher Routes
    Route::prefix('/teacher')->controller(TeacherController::class)->name('teacher.')->group(function(){
        Route::get('/{id?}', 'index')->name('index');
        Route::post('/store-update/{id?}', 'storeAndUpdate')->name('storeAndUpdate');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });
});
