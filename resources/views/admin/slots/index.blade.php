@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Slots</div>
                                            @if (session('success'))
                                                    <div class="alert alert-success">
                                                        {{ session('success') }}
                                                    </div>
                                                @elseif(session('delete_message'))
                                                    <div class="alert alert-danger">
                                                        {{ session('delete_message') }}
                                                    </div>
                                                    
                                                @endif
                    <div class="panel-body">
                        <a href="{{ url('/admin/slots/create') }}" class="btn btn-success btn-sm" title="Add New Slot">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/slots', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th><center>
                                            ID
                                        </center></th>
                                        <th> <center>
                                            Time Range
                                        </center></th>
                                        <th><center>
                                            Day of Week
                                        </center></th>
                                        <th><center>
                                            Number of slot available
                                        </center></th>
                                        <th> <center>
                                            Actions
                                        </center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $num = 1; ?>
                                @foreach($slots as $item)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $item->time_range }}</td>
                                        @if($slot->slot_available == 0)
                                              <td> 
                                                  {{ "Sunday" }} 
                                              </td>  
                                        @elseif($slot->slot_available == 1)
                                              <td> 
                                                  {{ "Monday" }} 
                                              </td> 
                                        @elseif($slot->slot_available == 2)
                                            <td> 
                                                {{ "Tuesday" }} 
                                            </td> 
                                        @elseif($slot->slot_available == 3)
                                            <td> 
                                                {{ "Wednesday" }} 
                                            </td>
                                        @elseif($slot->slot_available == 4)
                                            <td> 
                                                {{ "Thursday" }} 
                                            </td>
                                        
                                        @elseif($slot->slot_available == 5)
                                            <td> 
                                                {{ "Friday" }} 
                                            </td>
                                        @elseif($slot->slot_available == 6)
                                            <td> 
                                                {{ "Saturday" }} 
                                            </td>
                                        @endif
                                        <td>{{ $item->slot_available }}</td>
                                        <td>
                                            <a href="{{ url('/admin/slots/' . $item->id) }}" title="View Slot"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/slots/' . $item->id . '/edit') }}" title="Edit Slot"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/slots', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Slot',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $slots->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
