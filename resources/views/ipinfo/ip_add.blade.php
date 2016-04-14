@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">List of IP Address</div>
            <!-- Form for Seach -->
                <form class="navbar-form pull-right" role="search">
                    <div class="input-group add-on">
                        <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            <!-- End Form For Seach -->
                <div class="panel-body">
                

                    <!-- Body Table -->
                               
                          <table class="table table-hover">   
                            <thead>
                             <tr>
                                <th>IP Add</th>
                                <th>Tag #</th>
                                <th>MAC Add</th>
                                <th>Assignee</th>
                                <th>Status</th>
                                <th>Department</th>
                                <th>Remarks</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($ipinfos as $ipinfo)
                              <tr>
                                <td>{{ $ipinfo->ip_add }}</td>
                                <td>{{ $ipinfo->tag_no }}</td>
                                <td>{{ $ipinfo->mac_add }}</td>
                                <td>{{ $ipinfo->asignee }}</td>
                                <td>{{ $ipinfo->status }}</td>
                                <td>{{ $ipinfo->department }}</td>
                                <td>{{ $ipinfo->remarks }}</td>
                                <td> 
                                <a href="/tech-support/public/ipinfos/{{ $ipinfo->id }}"><span class="btn btn-primary glyphicon glyphicon-eye-open" aria-hidden="true"></a>
                                <a href="/tech-support/public/ipinfos/{{ $ipinfo->id }}/edit"><span class="btn btn-warning glyphicon glyphicon-edit" aria-hidden="true"></a>

                                </td> 
                                <td>

                                    <form action="{{ url('ipinfos/'.$ipinfo->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}
                                        
                                        <button type="submit" class="btn btn-danger fa fa-btn fa-trash">
                                        </button>
                                    </form>

                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        
                
                    <!-- End Body Table -->
                    <a href="{{ action("IpinfosController@add") }}"><button type="button" class="btn btn-info">Add</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
