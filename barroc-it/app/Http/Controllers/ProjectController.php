<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index() {

        $projects = \App\Project::all();

        return view('projects/index');

    }

    public function open() {

        $projects = \App\Project::all();

        return view('projects/open')
            ->with('projects', $projects);
    }

    public function complete() {

        $game = \App\Project::all();

        return view('projects/complete');
    }
}
