<div class="form-group">
    <label>Title</label>
    <div>
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Meeting with Patrick'])!!}

    </div>
</div>

<div class="form-group">
    <label>Description</label>
    {!! Form::textArea('description',null,['rows'=>'5','class'=>'form-control'])!!}
</div>