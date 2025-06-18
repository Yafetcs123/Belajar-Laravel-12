<?php
use App\Models\siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/data', function () {
    $data = siswa::orderBy('nilai', 'desc')->get();
    return view('data.data',['data' => $data]);
});

Route::get('/data/{id}', function ($id) {
    $dat = Siswa::findOrFail($id); //
    return view('data.show', ['dat' => $dat]);
});

Route::get('/contact', function () {
    $nama = "Pradika";
    $umur = 91;
    return view('data.contact',compact('nama', 'umur'));
});