<?php

namespace App\Http\Controllers\MyApp;

use App\Http\Controllers\Controller;
use App\MyApp\Task;
use Request;

class TaskController extends Controller
{

    public function index(){
        $tasks = Task::all();
        return $tasks;
    }

    public function create(){
        return view('MyApp.create');
    }

    public function store(){
        $input = Request::all();
        //TODO: Validate form input data before persist
        //TODO: Remove manual user_id when auth is implemented
        $input['user_id'] = 1;
        $task = Task::create($input);
        return $task;
    }

    public function show($task){
        return $task;
    }
}
