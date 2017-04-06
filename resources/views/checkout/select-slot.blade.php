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
                                                <li class="active">
                                                    <a href="#order_resume" data-toggle="tab">
                                                        <p>Today</p>
                                                        <p>Mar 21</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#order_details" data-toggle="tab">
                                                        <p>Tomorrow</p>
                                                        <p>Mar 21</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#customer_details" data-toggle="tab">
                                                        <p>Thursday</p>
                                                        <p>Mar 21</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#order_history" data-toggle="tab">
                                                        <p>Friday</p>
                                                        <p>Mar 21</p>
                                                    </a> 
                                                </li>
                                                <li>
                                                    <a href="#customer_resume" data-toggle="tab">
                                                        <p>Saturday</p>
                                                        <p>Mar 21</p>
                                                    </a> 
                                                </li>
                                                <li>
                                                    <a href="#customer_history" data-toggle="tab">
                                                        <p>Sunday</p>
                                                        <p>Mar 21</p>
                                                    </a> 
                                                </li>
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div class="tab-pane fade active in" id="order_resume">
                                                    <div class="table-responsive">
                                                        <table class="table border-bottom table-hover m-b-0">
                                                            <tbody>
                                                                @foreach($slots as $slot)
                                                                    <tr>
                                                                        <td class="p-t-14 no-bd opacity-70">{{$slot->time_range}}</td>
                                                                        <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                    </tr>
                                                                @endforeach
                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <button class="btn btn-block bg-transparent-black text-center p-b-15 p-t-15">See more...</button>
                                                </div>
                                                <div class="tab-pane fade" id="order_details">
                                                    <div class="table-responsive">
                                                        <table class="table border-bottom table-hover m-b-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="p-t-14 no-bd opacity-70">Within 2 hours</td>
                                                                    <td class="p-t-14 no-bd text-right"><button class="btn bg-transparent-black no-bd p-0 uppercase" disabled>change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <button class="btn btn-block bg-transparent-black text-center p-b-15 p-t-15">See more...</button>
                                                </div>
                                                <div class="tab-pane fade" id="customer_details">
                                                    <div class="table-responsive">
                                                        <table class="table border-bottom table-hover m-b-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="p-t-14 no-bd opacity-70">Within 2 hours</td>
                                                                    <td class="p-t-14 no-bd text-right"><button class="btn bg-transparent-black no-bd p-0 uppercase" disabled>change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <button class="btn btn-block bg-transparent-black text-center p-b-15 p-t-15">See more...</button>
                                                </div>
                                                <div class="tab-pane fade" id="order_history">
                                                    <div class="table-responsive">
                                                        <table class="table border-bottom table-hover m-b-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="p-t-14 no-bd opacity-70">Within 2 hours</td>
                                                                    <td class="p-t-14 no-bd text-right"><button class="btn bg-transparent-black no-bd p-0 uppercase" disabled>change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <button class="btn btn-block bg-transparent-black text-center p-b-15 p-t-15">See more...</button>
                                                </div>
                                                <div class="tab-pane fade" id="customer_resume">
                                                    <div class="table-responsive">
                                                        <table class="table border-bottom table-hover m-b-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="p-t-14 no-bd opacity-70">Within 2 hours</td>
                                                                    <td class="p-t-14 no-bd text-right"><button class="btn bg-transparent-black no-bd p-0 uppercase" disabled>change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <button class="btn btn-block bg-transparent-black text-center p-b-15 p-t-15">See more...</button>
                                                </div>
                                                <div class="tab-pane fade" id="customer_history">
                                                    <div class="table-responsive">
                                                        <table class="table border-bottom table-hover m-b-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="p-t-14 no-bd opacity-70">Within 2 hours</td>
                                                                    <td class="p-t-14 no-bd text-right"><button class="btn bg-transparent-black no-bd p-0 uppercase" disabled>change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-t-14">10am - 11am</td>
                                                                    <td class="text-right"><button class="btn bg-transparent uppercase f-12">change</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <button class="btn btn-block bg-transparent-black text-center p-b-15 p-t-15">See more...</button>
                                                </div>
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