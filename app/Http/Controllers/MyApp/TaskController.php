<?php

namespace App\Http\Controllers\MyApp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyApp\Task;

class TaskController extends Controller
{
    public function create(){
        return view('MyApp.create');
    }
}
