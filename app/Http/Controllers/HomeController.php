<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea; // Import the Idea model
class HomeController extends Controller
{
    public function index()
    {


// for first section of the landing page
        $landingTitle = [
            [
                'title' => 'Welcome to Do Smart'
            ]
        ];

        $landingDescription = [
            [
                'description' => 'Unlock Your Productivity with Do Smart: Your Ultimate To-Do Companion!'
            ]
        ];
// end

        // for second section of the landing page
        $secondPart = [
            [
                'title' => 'About',
                'description' => 'Do Smart is a platform that allows you to manage your tasks and projects in a simple and efficient way. It is designed to help you organize your work and personal life, so you can focus on what really matters. With Do Smart Whether you are working on a project with a team or managing your personal to-do list, Do Smart has everything you need to stay organized and productive. Get started today and see how Do Smart can help you get things done.'
            ]
        ];
        // end
        return view('home', [
            'landingTitle' => $landingTitle,
            'landingDescription' => $landingDescription,
            'secondPart' => $secondPart
        ]);
    }
}
