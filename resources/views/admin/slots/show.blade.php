@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Slot {{ $slot->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/slots') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/slots/' . $slot->id . '/edit') }}" title="Edit Slot"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/slots', $slot->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Slot',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $slot->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Time Range </th><td> {{ $slot->time_range }} </td>
                                    </tr>
                                    <tr>
                                        <th> Day of week </th>
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
                                    </tr>
                                    <tr>
                                        <th> Number of slot available </th><td> {{ $slot->slot_available }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
