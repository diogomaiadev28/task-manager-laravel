<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{
    public function index()
    {
        $name = 'Diogo';
        $tasks = ['Study Laravel', 'Study for ENEM', 'Search for a new job'];
        return view('home', [
            'name' => $name,
            'tasks' => $tasks
        ]);
    }
}
