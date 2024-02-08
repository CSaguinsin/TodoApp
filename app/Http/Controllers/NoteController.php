<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea; // Import the Idea model
class NoteController extends Controller
{
    public function index()
    {

        return view('layout.mainComponents.notes',[
            'ideas' => Idea::orderBy('created_at','DESC')->get() // Pass all the ideas to the view
        ]); // Return the correct view name
    }
}
