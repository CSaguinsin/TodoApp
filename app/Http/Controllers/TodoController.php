<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoIdea; // Import the TodoIdea model

class TodoController extends Controller
{
    public function index()
    {
        // Retrieve all TodoIdeas
        $todoIdeas = TodoIdea::orderBy('created_at', 'DESC')->get();

        // Return the view with the todoIdeas collection
        return view('layout.mainComponents.todo', [
            'todoIdeas' => $todoIdeas
        ]);
    }
}
