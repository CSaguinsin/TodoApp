<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $landingTitle = [
            [
                'title' => 'Welcome to Do Smart'
            ]
        ];

        $landingDescription = [
            [
                'description' => 'Do Smart is a platform that allows you to manage your tasks and projects in a simple and efficient way. It is designed to help you organize your work and personal life, so you can focus on what really matters. With Do Smart, you can create tasks, set deadlines, and track your progress. You can also collaborate with others, share files, and communicate in real time. Whether you are working on a project with a team or managing your personal to-do list, Do Smart has everything you need to stay organized and productive. Get started today and see how Do Smart can help you get things done.'
            ]
        ];

        return view('home', [
            'landingTitle' => $landingTitle,
            'landingDescription' => $landingDescription
        ]);
    }
}
