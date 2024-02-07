<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $title = [
            [
                'title' => 'Tasks'
            ]
            ];



        return view('task', [
            'title' => $title
        ]);
    }
}
