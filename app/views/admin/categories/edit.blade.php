@extends('admin/layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Update a Category
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
    <h3>
        Update a Category

        <div class="pull-right">
            <a href="{{ URL::to('admin/categories') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
        </div>
    </h3>
</div>

<form class="form-horizontal" method="post" action="" autocomplete="off">
    <!-- CSRF Token -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <!-- ./ csrf token -->
    <!-- Question name -->
    <div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
        <label class="control-label" for="name">Name</label>
        <div class="controls">
            <input type="text" name="name" id="name" value="{{ Input::old('name', $category->name) }}" />
            {{ $errors->first('name', '<span class="help-inline">:message</span>') }}
        </div>
    </div>
    <!-- ./ Question name -->

    <!-- Form Actions -->
    <div class="control-group">
        <div class="controls">
            <a class="btn btn-link" href="{{ URL::to('admin/categories') }}">Cancel</a>
            <button type="reset" class="btn">Reset</button>
            <button type="submit" class="btn btn-success">Publish</button>
        </div>
    </div>
    <!-- ./ form actions -->

</form>
@stop
