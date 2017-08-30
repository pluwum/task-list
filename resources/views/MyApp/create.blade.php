@include('MyApp.header')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Create New Task</div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                    {!! Form::open(['url' => '/task/','role'=>'form','id'=>'task']) !!}
                    @include('MyApp.form')
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@include('MyApp.footer')