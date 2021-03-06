@extends('admin/layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Create a New Category
@stop

{{-- Content --}}
@section('content')
<div class="row">a</div>

{{ Form::open(array('url' => 'admin/categories/create', 'class' => 'form-horizontal')) }}
    <!-- CSRF Token -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <!-- ./ csrf token -->

    <!-- Question name -->
    <div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
        <label class="control-label" for="name">Name</label>
        <div class="controls">
            <input type="text" name="name" id="name" value="{{ Input::old('name') }}" />
            {{ $errors->first('name', '<span class="help-inline">:message</span>') }}
        </div>
    </div>
    <!-- ./ Question name -->

    <!-- Form Actions -->
    <div class="control-group">
        <div class="controls">
            <!-- <a class="btn btn-link" href="{{ URL::to('admin/categories') }}">Cancel</a> -->
            <button type="submit" class="btn btn-success">Publish</button>
        </div>
    </div>
    <!-- ./ form actions -->

</form>
@stop
