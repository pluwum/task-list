<?php

namespace App\Http\Controllers\MyApp;

use App\Http\Controllers\Controller;
use App\MyApp\Task;
use Request;

class TaskController extends Controller
{

    /**
     * Display all tasks viewable by user
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(){
        $tasks = Task::all();
        return $tasks;
    }

    /**
     * Display task create page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('MyApp.create');
    }

    /**
     * Persist a new task the database
     * @return $this|\Illuminate\Database\Eloquent\Model
     */
    public function store(){
        $input = Request::all();
        //TODO: Validate form input data before persist
        //TODO: Remove manual user_id when auth is implemented
        $input['user_id'] = 1;
        $task = Task::create($input);
        return $task;
    }

    /**
     * Show details of a single task
     * @param $task
     * @return mixed
     */
    public function show($task){
        return $task;
    }

    /**
     * Show Task for editing
     * @param $task
     * @return $this
     */
    public function edit($task){
        return view('MyApp.edit')->with(compact('task'));
    }
}
