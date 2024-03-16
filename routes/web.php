<?php

use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 

Route::group(['prefix' => 'jurusan' ], function() {
    Route::get('/', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('/create', [JurusanController::class, 'create'])->name('jurusan.create');
    Route::post('/store', [JurusanController::class, 'store'])->name('jurusan.store');
    Route::get('/edit/{id_jurusan?}', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::post('/storeEdit/{id_jurusan?}', [JurusanController::class, 'storeEdit'])->name('jurusan.storeEdit');
    Route::delete('/delete/{id_jurusan?}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');
});
