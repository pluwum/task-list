@include('MyApp.header')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">All Tasks</div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Task Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    @foreach( $tasks as $task)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$task->name}}</td>
                            <td>{{$task->description}}</td>
                            <td>
                                {{Form::model($task)}}
                                    {!! Form::select('state_id',[1=>'New',2=>'In Progress',3=>'Finished'],null,['class'=>'task-status form-control', 'data-task'=>$task->id])!!}
                                {{Form::close()}}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="" href="{{asset("task/$task->id/edit")}}">Edit</a></li>
                                        <!-- TODO:Make Use DELETE instead of GET-->
                                        <li><a class="" href="{{asset("task/$task->id/delete")}}">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@include('MyApp.footer')