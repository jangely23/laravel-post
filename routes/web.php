<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/**
 * Route::get      | Consultar
 * Route::post     | Guardar
 * Route::delete   | Eliminar
 * Route::get      | Actualizar
 */

/*
    Route::get('/', [PageController::class,'home'])->name('home');

    Route::get('blog', [PageController::class,'blog'])->name('blog');

    Route::get('blog/{slug}', [PageController::class,'post'])->name('post');

*/

Route::controller(PageController::class)->group(function(){
    Route::get('/',           'home')->name('home');
    Route::get('blog/{post:slug}', 'post')->name('post');
});

Route::redirect('/dashboard', 'posts')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
Route::resource('posts', PostController::class): Esto declara un conjunto completo de rutas RESTful para el recurso posts. Laravel asocia automáticamente estas rutas a métodos específicos en el controlador PostController
->except(['show']): Esta parte indica que todas las rutas generadas por Route::resource estarán habilitadas, excepto la ruta show. La ruta show normalmente se utilizaría para mostrar un recurso específico, pero al excluirlo, estás diciendo que no quieres una ruta específica para mostrar un recurso individual. En otras palabras, no se generará una ruta show en este caso.
*/
Route::resource('posts', PostController::class)->middleware(['auth', 'verified'])->except(['show']);

require __DIR__.'/auth.php';
