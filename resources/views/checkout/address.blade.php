@extends('layouts.sarelo')

@section('content')

            <section>
                <div class="container width-94p">
                   <div class="row">
                       <div class="col-md-8">
                           <div class="card">
                                <div class="content clearfix">
                                    <form>
                                        <fieldset>
                                            <h4 class="title">
                                                <i class="fa fa-map-marker c-brand-green f-27"></i>
                                                Enter Delivery Address
                                            </h4>
                                            <div class="row p-t-30">
                                                <div class="col-md-6 p-b-20">
                                                    <div class="form-group">
                                                        <label for="address" class="w-500">
                                                            Street Address
                                                            <sup class="important f-9">
                                                                <i class="fa fa-asterisk"></i>
                                                            </sup class="important f-9">
                                                        </label>
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Street Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-b-20">
                                                    <div class="form-group">
                                                        <label for="number" class="w-500">
                                                            Phone Number
                                                            <sup class="important f-9">
                                                                <i class="fa fa-asterisk"></i>
                                                            </sup class="important f-9">
                                                        </label>
                                                        <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="city" class="w-500">
                                                            City
                                                            <sup class="important f-9">
                                                                <i class="fa fa-asterisk"></i>
                                                            </sup class="important f-9">
                                                        </label>
                                                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="instruction" class="w-500">
                                                            Instruction for Delivery <span class="opacity-50">(optional)</span>
                                                        </label>
                                                        <textarea class="form-control" name="instruction" id="instruction" placeholder="(e.g you have vicious dogs)"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="divider">
                                            <hr>
                                        </div>
                                        <fieldset>
                                            <h4 class="title">
                                                <i class="fa fa-user-circle c-brand-green"></i>
                                                Personal Details
                                            </h4>
                                            <div class="row p-t-30">
                                                <div class="col-md-6 p-b-20">
                                                    <div class="form-group">
                                                        <label for="first_name" class="w-500">
                                                            First Name
                                                            <sup class="important f-9">
                                                                <i class="fa fa-asterisk"></i>
                                                            </sup class="important f-9">
                                                        </label>
                                                        <input type="text" class="form-control" id="first_name" name="first_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-b-20">
                                                    <div class="form-group">
                                                        <label for="last_name" class="w-500">
                                                            Last Name
                                                            <sup class="important f-9">
                                                                <i class="fa fa-asterisk"></i>
                                                            </sup class="important f-9">
                                                        </label>
                                                        <input type="text" class="form-control" id="last_name" name="last_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-b-20">
                                                    <div class="form-group">
                                                        <label for="email" class="w-500">
                                                            Email Address
                                                            <sup class="important f-9">
                                                                <i class="fa fa-asterisk"></i>
                                                            </sup class="important f-9">
                                                        </label>
                                                        <input type="email" class="form-control" id="email" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-b-20">
                                                    <div class="form-group">
                                                        <label for="password" class="w-500">
                                                            Password
                                                        </label>
                                                       <input type="password" class="form-control" name="password" id="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-md f-18 pull-right c-white" disabled="">Continue</button>
                                    </form>
                                </div>
                           </div>
                           <p class="text-center">*Terms and condtions apply on free delivery. <a href="#" class="c-brand-purple">Learn more</a></p>
                       </div>
                       <div class="col-md-4">
                           <div class="card">
                                <div class="header">
                                    <h4 class="title">Cart Summary</h4>
                                </div>
                                <div class="content">
                                    <p class="category">The total cost is inclusive of tax, delivery and service charge.</p>
                                    <ul class="p-l-0 list-style-none">
                                        <li>
                                            <hr>
                                        </li>
                                        <li>
                                            <p class="menus">
                                                <span>Your Basket</span>
                                                <span class="pull-right">
                                                    &#8358;
                                                    <span class="cash">9882</span>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <p class="menus">
                                                <span>Sales Tax</span>
                                                <span class="pull-right">
                                                    &#8358;
                                                    <span class="cash">9882</span>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <p class="menus">
                                                <span>Service charge</span>
                                                <span class="pull-right">
                                                    &#8358;
                                                    <span class="cash">9882</span>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <p class="menus">
                                                <span>Delivery Charge</span>
                                                <span class="pull-right">
                                                    &#8358;
                                                    <span class="cash">9882</span>
                                                </span>
                                            </p>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li>
                                            <p class="menus">
                                                <span>Total Due</span>
                                                <span class="pull-right c-brand-green f-20">
                                                    &#8358;
                                                    <span class="cash">9882</span>
                                                </span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
            </section>

@endsection