@extends('layouts.sarelo')

@section('content')

 <section>
                <div class="container width-94p">
                   <div class="row">
                       <div class="col-md-8">
                           <div class="card" id="addressContent">
                                <div class="header">
                                    <h4 class="title">
                                        <i class="fa fa-map-marker c-brand-green f-27"></i> Choose Delivery Address
                                    </h4>
                                </div>
                                <form method="post">
                                    {{csrf_field()}}
                                    @foreach($addresses as $address)
                                    <div class="content p-t-10 clearfix m-t-20">
                                        <!--starts here -->
                                        <label class="card m-b-0 bd-brand-purple bd-4 width-100p pos-rel w-100">
                                            <div class="p-15 clearfix">
                                                <p class="pull-left m-b-0 c-brand-purple"><span><i class="fa fa-home"></i></span> {{$address->address}}</p>
                                                <div class="pull-right"><i class="fa fa-check-circle-o f-23 c-brand-purple"></i></div>
                                            </div>
                                            <input type="radio" name="user_address_id" value="{{$address->id}}" class="addresses pos-abs">
                                        </label>
                                        <!-- starts here end -->
                                    </div>
                                    @endforeach
                                
                               
                                <div class="content p-t-10 clearfix">
                                    <a href="/new-address" class="btn btn-block bg-white bd-gray bd-4">Add New Address</a>
                                </div>
                                    <div class="content p-t-10">
                                    <div class="divider">
                                        <hr>
                                    </div>
                                </div>
                                <div class="content p-t-10">
                                    <div class="card no-bd m-b-0">
                                        <div class="row">
                                            <div class="col-md-8">
                                               <p>Phone Number</p>
                                               <a href="tel:+234(0)9028521055" class="w-600">234(0)9028521055</a>
                                            </div>
                                            <div class="col-md-4">
                                               <button class="btn bg-white pull-right uppercase w-600">edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content p-t-10 clearfix">
                                    <button class="btn btn-md bg-brand-green pull-right f-18">Continue</button>
                                </div>
                                </form>
                           </div>
                            <p class="text-center">*Terms and conditions apply on free delivery. <a href="#" class="c-brand-purple">Learn more</a></p>
                           
                       </div>
                       <div class="col-md-4">
                          @include('checkout.billing-summary')
                       </div>
                   </div> 
                </div>
            </section>
@endsection