@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add IP infromation</div>
                <div class="panel-body">

                    {!! Form::open(['url' => 'ipinfos']) !!}
                        <div class="form-group">
                            <label class="col-md-4 control-label">IP Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ip_add" value="{{ old('ip_add') }}">

                                @if ($errors->has('ip_add'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ip_add') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Tag #</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tag_no" value="{{ old('tag_no') }}">

                                @if ($errors->has('tag_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tag_no') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">MAC Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mac_add" value="{{ old('mac_add') }}">

                                @if ($errors->has('mac_add'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mac_add') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Assignee Personasignee</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="asignee" value="{{ old('asignee') }}">

                                @if ($errors->has('asignee'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asignee') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">IP Address Status</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="status" value="{{ old('status') }}">

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="department" value="{{ old('department') }}">

                                @if ($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Remarks</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control" name="remarks" value="{{ old('remarks') }}"></textarea>

                                @if ($errors->has('remarks'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('remarks') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Submit
                                </button>
                                <a href="{{ action("IpinfosController@index") }}"><button type="button" class="btn btn-info">Back</button></a>
                            </div>
                            
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
