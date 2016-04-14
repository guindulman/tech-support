@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit IP infromation</div>
                <div class="panel-body">
                
                    <!-- {!! Form::open(['url' => 'ipinfos/update/{id}', 'method' => 'POST']) !!} -->
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('ipinfos/s{ $ipinfos->id }') }}">
                     {!! csrf_field() !!}
                     {!! method_field('PATCH') !!}
                        <div class="form-group">
                            <label class="col-md-4 control-label">IP Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="" value="{{ $ipinfos->ip_add }}">

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Tag #</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="" value="{{ $ipinfos->tag_no }}">

                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">MAC Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="" value="{{ $ipinfos->mac_add }}">

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Assignee Personasignee</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="" value="{{ $ipinfos->asignee }}">

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">IP Address Status</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="" value="{{ $ipinfos->status }}">

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="" value="{{ $ipinfos->department }}">

                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Remarks</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="" value="{{ $ipinfos->remarks }}">{{ $ipinfos->remarks }}</textarea>

                               
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
                        
                        
                    <!-- {!! Form::close() !!} -->
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection