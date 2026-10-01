<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('fundamentals')->group(function () {
    Route::prefix('preparation')->group(function () {
        Route::get('introduction', function () {
            return view('fundamentals.Introduction.1_introductiion', ['title' => 'Введение', ]);
        })->name('introduction');
        Route::get('installation', function () {
            return view('fundamentals.Introduction.2_installation', ['title' => 'Установка', ]);
        })->name('installation');
        Route::get('file-structure', function () {
            return view('fundamentals.Introduction.3_file-structure', ['title' => 'файловая структура', ]);
        })->name('file-structure');
    });
});
