<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoIdeaController;
use App\Http\Livewire\ImageIndex;
use Illuminate\Support\Facades\Route;



Route::get('/',
    [ HomeController::class , 'index' ]
);






// main ui's of the application

Route::get('/notes',
    [NoteController::class , 'index' ]
);

Route::get('/ideas',
    [IdeaController::class , 'index' ]
);

Route::get('/todo',
    [TodoController::class , 'index' ]
);
// end

// CRUD Logic of notes
Route::post('/ideas',
    [IdeaController::class , 'store' ]
) ->name('idea.create');

Route::delete('/ideas/{id}',
    [IdeaController::class , 'destroy' ]
) ->name('idea.destroy');
// end

// CRUD Logic of to-do
Route::post('/todo',
    [TodoIdeaController::class , 'store' ]
) ->name('todos.create');

Route::delete('/todo/{id}',
    [TodoIdeaController::class , 'destroy' ]
) ->name('todos.destroy');
// end

// // image upload route
// Route::get('/images', ImageIndex::class)->name('image.index');
// // end
