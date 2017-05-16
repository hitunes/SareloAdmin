@extends('layouts.account')

@section('content')

<!-- BEGIN CONTENT BODY -->
                                    <div class="page-content p-t-0 p-l-40">
                                        <div class="row">
                                            <div class="col-md-12">
                                               <div class="content clearfix">
                                                    <!--starts here -->
                                                    <div class="card">
                                                        <div class="header">
                                                            <p>UPDATE YOUR PERSONAL INFORMATION</p>
                                                        </div>
                                                        <div class="content clearfix">
                                                            <form action="/account/update-details" method="post">
                                                                <div class="row">
                                                                    {{csrf_field()}}
                                                                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} col-md-6">
                                                                        <label for="first_name">First Name:</label>
                                                                        <input type="text" class="form-control" name="first_name" value="{{\Auth::user()->first_name}}" id="first_name" placeholder="Kene">
                                                                        @if ($errors->has('first_name'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('first_name') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} col-md-6">
                                                                        <label for="last_name">Last Name:</label>
                                                                        <input type="text" class="form-control" name="last_name" value="{{\Auth::user()->last_name}}" id="last_name" placeholder="Okafor">
                                                                        @if ($errors->has('last_name'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('last_name') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-md-6">
                                                                        <label for="phone">Phone</label>
                                                                        <input value="{{\Auth::user()->phone}}" type="text" name="phone" class="form-control" id="phone" placeholder="09028521005">
                                                                        @if ($errors->has('phone'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <button type="submit" class="p-t-10 p-b-10 btn bg-brand-green f-18 col-md-4 col-xs-12">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- starts here end -->
                                                </div>
                                                <div class="content clearfix">
                                                    <!--starts here -->
                                                     <div class="card">
                                                        <div class="header">
                                                            <p>CHANGE YOUR EMAIL ADDRESS</p>
                                                        </div>
                                                        <div class="content clearfix">
                                                            <form action="/account/update-email" method="post">
                                                                {{csrf_field()}}
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="email">Email Address:</label>
                                                                        <input type="email" class="form-control" value="{{\Auth::user()->email}}" name="email" id="email" placeholder="iamkene@gmail.com">
                                                                    </div>
                                                                </div>

                                                                <button type="submit" class="p-t-10 p-b-10 btn bg-brand-green f-18 col-md-4 col-xs-12">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- starts here end -->
                                                </div>
                                                <div class="content clearfix">
                                                    <!--starts here -->
                                                     <div class="card">
                                                        <div class="header">
                                                            <p>CHANGE YOUR PASSWORD</p>
                                                        </div>
                                                        <div class="content clearfix">
                                                            <form action="/account/update-password" method="post">
                                                                {{csrf_field()}}
                                                                <div class="row">
                                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">
                                                                        <label for="email">Enter New Password:</label>
                                                                        <input type="password" name="password" class="form-control" id="email" placeholder="enter new password">
                                                                        @if ($errors->has('password'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('password') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} col-md-6">
                                                                        <label for="pwd">Confirm New Password:</label>
                                                                        <input type="password" name="password_confirmation" class="form-control" id="pwd" placeholder="confirm new password">

                                                                        @if ($errors->has('password_confirmation'))
                                                                            <span class="help-block">
                                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <button type="submit" class="p-t-10 p-b-10 btn bg-brand-green f-18 col-md-4 col-xs-12">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- starts here end -->
                                                </div>

                                            </div>
                                        </div>
                                        <!-- END PAGE BASE CONTENT -->
                                    </div>
                                    <!-- END CONTENT BODY -->

@endsection