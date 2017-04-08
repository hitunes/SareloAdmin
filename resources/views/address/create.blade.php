@extends('layouts.sarelo')

@section('content')
<section>
                <div class="container width-94p">
                   <div class="row">
                       <div class="col-md-8">
                           <div class="card">
                                <div class="content clearfix">
                                    <form id="addressForm" method="post">
                                        {{ csrf_field() }}
                                        <fieldset>
                                            <h4 class="title">
                                                <i class="fa fa-map-marker c-brand-green f-27"></i>
                                                Enter Delivery Address
                                            </h4>
                                            <div class="row p-t-30">
                                                <div class="col-md-6 p-b-20">
                                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                                        <label for="address" class="w-500">
                                                            Street Address
                                                            <sup class="important f-9">
                                                                <i class="fa fa-asterisk"></i>
                                                            </sup class="important f-9">
                                                        </label>
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Street Address" value="{{old('address')}}" required>
                                            
                                                            @if ($errors->has('address'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('address') }}</strong>
                                                                </span>
                                                            @endif
                                                     
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6 p-b-20">
                                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                        <label for="number" class="w-500">
                                                            Phone Number
                                                            <sup class="important f-9">
                                                                <i class="fa fa-asterisk"></i>
                                                            </sup class="important f-9">
                                                        </label>
                                                        <input type="text" class="form-control" id="number" value="{{old('phone')}}" name="phone" placeholder="Phone Number" required>
                                                          @if ($errors->has('phone'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                         @endif
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                                        <label for="city" class="w-500">
                                                            City
                                                            <sup class="important f-9">
                                                                <i class="fa fa-asterisk"></i>
                                                            </sup class="important f-9">
                                                        </label>
                                                        <input type="text" class="form-control" value="{{old('city')}}" id="city" name="city" placeholder="City" required="">
                                                        @if ($errors->has('phone'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                         @endif
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </fieldset>
                                        <div class="divider">
                                            <hr>
                                        </div>
                                   
                                     <button type="submit" class="btn btn-md f-18 pull-right c-white" id="submit">Add</button>
                                        
                                    </form>
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