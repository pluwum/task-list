@foreach( $tasks as $task)
    {{$task}}
    <form method="post" action="{{asset("task/$task->id")}}">
        {{method_field('DELETE')}} {{csrf_field()}}
        <input type="submit" value = "delete">
    </form>
@endforeach
