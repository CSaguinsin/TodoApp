<?php

namespace App\Http\Controllers;
use App\Models\TodoIdea; // Import the Idea model
use Illuminate\Http\Request;

class TodoIdeaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'idea' => 'required',
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $todos = new TodoIdea();
        $todos->content = $request->input('idea');
        $todos->title = $request->input('title');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'uploads/ideas/';
            $image->move(public_path($path), $filename);
            $todos->image = $path . $filename;
        }

        $todos->save();

        return redirect('/todo');
    }


    public function destroy($id){
        $todos = TodoIdea::where('id', $id)->firstOrFail();

        $todos->delete();

        return redirect('/todo');
    }
}
