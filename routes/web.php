<?php

use App\Http\Controllers\Appcontroller;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\dbOperationController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\sitecontroller;
use App\Http\Controllers\studentController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Middleware\chacktype;


// Route::get('news/{id}/{name?}',function($id ,$name =' ' ){
//     return "news no# $id ,name $name ";

// })->whereNumber('id');
// Route::prefix('admin')->name('admin')->group(function(){
// Route::get('/',function(){
//     return 'admin dashbord';
// })->name('dashbord');

// Route::get('/tags',function(){
//     return 'admin tags';
// })->name('tags');

// Route::get('/posts',function(){
//     return 'admin posts';
// })->name('posts');
// });
// Route::get('/user/{user}',function(User $user){});
// Route::get('/',[Appcontroller::class,'index'])->name('home');
// Route::get('/about',[Appcontroller::class,'about'])->name('about');
// Route::get('/contact',[Appcontroller::class,'contact'])->name('contact');
// Route::get('calc/{X}/{y}',[Appcontroller::class, 'calc'])->name('calc');
// Route::get('/posts',[Appcontroller::class, 'posts'])->name('posts');



Route::prefix('site')->name('site.')->group(function(){
    Route::get('/', [sitecontroller::class, 'index'])->name('index');
    Route::get('/about', [sitecontroller::class, 'about'])->name('about');
    Route::get('/contact', [sitecontroller::class, 'contact'])->name('contact');
    Route::get('/serveses', [sitecontroller::class, 'serveses'])->name('serveses');
});



Route::prefix('forms')->name('forms.')->group(function(){
    Route::get('/form1', [FormController::class, 'form1'])->name('form1');
    Route::post('/form1', [FormController::class, 'form1_data']);

    Route::get('/form2', [FormController::class, 'form2'])->name('form2');
     Route::post('/form2', [FormController::class, 'form2_data']);

    Route::get('/form3', [FormController::class, 'form3'])->name('form3');
      Route::post('/form3', [FormController::class, 'form3_data']);

    Route::get('/form4', [FormController::class, 'form4'])->name('form4');
    Route::post('/form4', [FormController::class, 'form4_data']);

    Route::get('/form5', [FormController::class, 'form5'])->name('form5');
    Route::post('/form5', [FormController::class, 'form5_data']);

    Route::get('/order', [FormController::class, 'order'])->name('order');
});
Route::get('/admin', function () {
    return 'admin dashbord';
})->middleware('chacktype:admin');

Route::get('/soon', function () {
    return 'Coming Soon Page';
});
Route::view('assets','assets');

Route::get('/help', function () {
    return show('ezz');
});
Route::get('/db',[dbOperationController::class,'index']);

// Route::prefix('courses')->name('courses.')->group(function(){
//     Route::get('/course',[CoursesController::class,'index'])->name('index');


// });
Route::get('/courses',[CourseController::class,'index'])->name('courses.index');
Route::get('/courses/create',[CourseController::class,'create'])->name('courses.create');
Route::post('/courses/store',[CourseController::class,'store'])->name('courses.store');
Route::delete('/courses/{id}',[CourseController::class,'destroy'])->name('courses.destroy');
Route::get('/courses/{id}/edit',[CourseController::class,'edit'])->name('courses.edit');
Route::match(['put','patch'],'/courses/{id}',[CourseController::class,'update'])->name('courses.update');
Route::get('/courses/trash',[CourseController::class,'trash'])->name('courses.trash');




Route::get('/students', [studentController::class, 'index'])->name('students.index');
Route::get('/students/create', [studentController::class, 'create'])->name('students.create');
Route::post('/students/store', [studentController::class, 'store'])->name('students.store');
Route::delete('/students/{id}', [studentController::class, 'destroy'])->name('students.destroy');
Route::get('/students/{id}/edit', [studentController::class, 'edit'])->name('students.edit');
Route::match(['put','patch'],'/students/{id}', [studentController::class, 'update'])->name('students.update');
//soft delete
Route::get('/students/trash', [studentController::class, 'trash'])->name('students.trash');

