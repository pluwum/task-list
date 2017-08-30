<?php

namespace App\Http\Controllers\MyApp;

use Auth;
use App\Http\Controllers\Controller;
use App\MyApp\Task;
use Request;
use Validator;

class TaskController extends Controller
{
    /**
     * Lets Protect our routes with a middle ware wrapped inside
     * a constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display all tasks viewable by user
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(){
        $tasks = Task::viewableByMe();
        return view('MyApp.index')->with(compact('tasks'));
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

        // Lets make sure everything is as required
        $validator = Validator::make($input, [
            'name' => 'required|unique:tasks|max:255',
            'description' => 'required|max:255',
        ]);

        // Let the user know if something wasnt entered right
        if ($validator->fails()) {
            return redirect('task/create')
                ->withErrors($validator)
                ->withInput();
        }

        $input['user_id'] = Auth::id();
        $task = Task::create($input);
        return $this->index();
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

    /**
     * Update task details
     * @param $task
     */
    public function update($task){
        $input = Request::all();
        $task->update($input);
        return $this->show($task);
    }

    /**
     * Delete Specified task from DB
     * @param $task
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function destroy($task){
        $task->delete();
        return $this->index();
    }

    public function changeState($task){
        $input = Request::all();
        $task->update($input);
        return $this->index();
    }
}
