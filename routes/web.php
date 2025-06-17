<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/data', function () {
    $data = [
        ['nama'=>'Budi', 'umur'=>20, 'status'=>'sehat', 'id'=>'001',  'Jurusan'=>'teknik mesin'],
        ['nama'=>'Putra', 'umur'=>21, 'status'=>'sehat', 'id'=>'002', 'Jurusan'=>'teknik mesin'],
        ['nama'=>'Citra', 'umur'=>21, 'status'=>'sehat', 'id'=>'003', 'Jurusan'=>'teknik informatika']
    ];
    return view('data.data',['data' => $data]);
});

Route::get('/data/{id}', function ($id) {
    return view('data.show', ['id' => $id]);
});

Route::get('/contact', function () {
    $nama = "Pradika";
    $umur = 91;
    return view('data.contact',compact('nama', 'umur'));
});