@include('MyApp.header')
{{Form::model($task,['method'=>'PATCH','url'=>'/task/'.$task->id,'id'=>'task'])}}
@include('MyApp.form')
{{Form::close()}}
@include('MyApp.footer')