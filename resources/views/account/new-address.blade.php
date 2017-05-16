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
                        <p>Add new address</p>
                    </div>
                    <div class="content clearfix">
                        <form action="/account/new-addresses" method="post">
                            <div class="row">
                                {{csrf_field()}}
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} col-md-6">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" name="address" value="{{old('address')}}" id="address" placeholder="500 Herbert Macaulay">
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }} col-md-6">
                                    <label for="city">City</label>
                                    <input value="{{old('city')}}" type="text" name="city" class="form-control" id="city" placeholder="Yaba">
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="p-t-10 p-b-10 btn bg-brand-green f-18 col-md-4 col-xs-12">Add</button>
                        </form>
                    </div>
                </div>
                <!-- starts here end -->
            </div>
        </div>
    </div>
    </div>

    <!-- END PAGE BASE CONTENT -->
</div>
<!-- END CONTENT BODY -->
@endsection