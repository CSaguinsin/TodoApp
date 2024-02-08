<?php

namespace App\Http\Controllers;
use App\Models\Idea; // Import the Idea model
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(){

        $idea = Idea::create([
            'content' => request()->get('idea', null),
            'title' => request()->get('title', null)
        ]);
            return redirect('/notes');
    }

    public function destroy($id){
        $idea = Idea::where('id', $id)->firstOrFail();
        $idea->delete();

        return redirect('/notes');
    }
}
