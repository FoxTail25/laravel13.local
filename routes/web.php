<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('fundamentals')->group(function () {

    Route::prefix('start')->group(function () {
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
        Route::get('migration-acquaintance', function () {
            return view('fundamentals.Introduction.6_migration', ['title' => 'знакомство с миграциями', ]);
        })->name('migration-acquaintance');
        Route::get('DB-SQLite', function () {
            return view('fundamentals.Introduction.7_DB-SQLite', ['title' => 'знакомство с миграциями', ]);
        })->name('DB-SQLite');
        Route::get('connecting-other-databases', function () {
            return view('fundamentals.Introduction.8_connecting_other_databases', ['title' => 'подключение MySQL, MariaDB, PostgreSQL', ]);
        })->name('connecting_other_databases');
        Route::get('debugging-functions-and-panel', function () {
            return view('fundamentals.Introduction.9_debugging_functions_and_panel', ['title' => 'дебаггинг', ]);
        })->name('debugging-functions-and-panel');
    });
    Route::prefix('routing')->group(function () {
        Route::get('introduction', function () {
            return view('fundamentals.routing.1_introductiion', ['title' => 'Введение в маршруты', ]);
        })->name('introduction-routing');
    });
});
