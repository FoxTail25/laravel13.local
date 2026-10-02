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
        Route::get('configuration', function () {
            return view('fundamentals.Introduction.4_configuration', ['title' => 'конфигурирование', ]);
        })->name('configuration');
        Route::get('DB-type-conf', function () {
            return view('fundamentals.Introduction.5_DB-type-conf', ['title' => 'тип БД', ]);
        })->name('DB-type-conf');
    });
});
