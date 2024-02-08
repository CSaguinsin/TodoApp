<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;



Route::get('/',
    [ HomeController::class , 'index' ]
);




Route::get('/todo', function () {
    return view('todo');
});

// main ui's of the application
Route::get('/profile', function () {
    return view('layout.mainComponents.profile');
});

Route::get('/notes',
    [NoteController::class , 'index' ]
);

Route::get('/todomain', function () {
    return view('layout.mainComponents.todomain');
});

// end

// CRUD Logic's
Route::post('/ideas',
    [IdeaController::class , 'store' ]
) ->name('idea.create');

Route::delete('/ideas/{id}',
    [IdeaController::class , 'destroy' ]
) ->name('idea.destroy');
// end
