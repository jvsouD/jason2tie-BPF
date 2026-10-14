<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);


Route::get('/about', function () {
    return view('halaman-about');
});

use App\Http\Controllers\MatakuliahController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);

Route::get('/matakuliah/store', [MatakuliahController::class, 'store']);

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/matakuliah/edit/{kode}', [MatakuliahController::class, 'edit']);

Route::get('/matakuliah/update/{kode}', [MatakuliahController::class, 'update']);

Route::get('/matakuliah/destroy/{kode}', [MatakuliahController::class, 'destroy']);

use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);

use App\Http\Controllers\QuestionController;
Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
