@extends('layouts.sarelo')
@section('content')
 <section>
                <div class="container width-94p">
                   <div class="row">
                       <div class="col-md-8">
                           <div class="card">
                                <div class="header">
                                    <h4 class="title">
                                        <i class="fa fa-clock-o c-brand-green f-27"></i> Choose Delivery Times
                                    </h4>
                                </div>
                                <div class="content clearfix">
                                    <!--starts here -->
                                    <div class="card">
                                        <div class="tabcordion">
                                            <ul id="myTab" class="nav nav-tabs">
                                                @foreach($slots as $key=>$value)
                                                <li @if($key == date('Y-m-d'))class="active"@endif>
                                                    <a href="#{{$key}}" data-toggle="tab">
                                                        @if($key == date('Y-m-d'))
                                                            <p>Today</p>
                                                        @else
                                                           <p>{{date('l', strtotime($key))}}</p> 
                                                        @endif
                                                        <p>{{date('M d', strtotime($key))}}</p>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                          
                                            
                                            <div id="myTabContent" class="tab-content">
                                            @foreach($slots as $key=>$value)
                                                <div class="tab-pane fade @if($key == date('Y-m-d')) active in @endif" id="{{$key}}">
                                                    <div class="table-responsive">
                                                        <table class="table border-bottom table-hover m-b-0">
                                                            <tbody>
                                                                    @foreach($value as $slot_details)
           
                                                                    <tr>
                                                                        <td class="p-t-14">{{$slot_details->time_range}}</td>
                                                                        <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                    </tr>
                                                                    @endforeach
                                                            
                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    {{--<button class="btn btn-block bg-transparent-black text-center p-b-15 p-t-15">See more...</button>--}}
                                                </div>
                                            @endforeach
                                            </div>
                                         
                                        </div>
                                    </div>
                                    <!-- starts here end -->
                                    <div class="clearfix p-r-20 p-l-20">
                                        <div class="f-left">
                                            <button type="button" class="btn btn-md bg-transparent f-18">Back</button>
                                        </div>
                                        <div class="f-right">
                                            <button type="button" class="btn btn-md c-white f-18" disabled>Continue</button>
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <p class="text-center">*Terms and condtions apply on free delivery. <a href="#" class="c-brand-purple">Learn more</a></p>
                       </div>
                       <div class="col-md-4">
                           @include('checkout.billing-summary')
                       </div>
                   </div> 
                </div>
            </section>
@endsection