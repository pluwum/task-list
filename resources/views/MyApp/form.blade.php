
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label>Title</label>
    <div>
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Meeting with Patrick'])!!}
        @if ($errors->has('name'))
            <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label>Description</label>
    {!! Form::textArea('description',null,['rows'=>'5','class'=>'form-control'])!!}
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>

<div class="form-actions pull-right">
    <button type="submit" class="btn blue">Submit</button>
    <button type="button" class="btn default">Cancel</button>
</div>