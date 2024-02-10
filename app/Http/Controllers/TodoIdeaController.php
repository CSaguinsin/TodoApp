<?php

namespace App\Http\Controllers;
use App\Models\TodoIdea; // Import the Idea model
use Illuminate\Http\Request;

class TodoIdeaController extends Controller
{
    public function store(){

        $todos = TodoIdea::create([
            'content' => request()->get('idea', null),
            'title' => request()->get('title', null)
        ]);
            return redirect('/todo');
    }

    public function destroy($id){
        $todos = TodoIdea::where('id', $id)->firstOrFail();
        $todos->delete();

        return redirect('/todo');
    }
}
