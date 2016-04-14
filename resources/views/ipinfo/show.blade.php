@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add IP infromation</div>
                <div class="panel-body">
                
                    <form class="form-horizontal" role="form">
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
                                <textarea type="text" class="form-control" name="" value="{{ $ipinfos->remarks }}">{{ $ipinfos->remarks }}</textarea>

                               
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ action("IpinfosController@index") }}"><button type="button" class="btn btn-info">Back</button></a>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection