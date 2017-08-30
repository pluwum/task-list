@include('MyApp.header')
{!! Form::open(['url' => '/task/','role'=>'form','id'=>'task']) !!}
@include('MyApp.form')
{!! Form::close() !!}
@include('MyApp.footer')