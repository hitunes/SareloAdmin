@extends('layouts.account')

@section('content')

<!-- BEGIN CONTENT BODY -->
<div class="page-content p-t-0 p-l-40">
    <div class="row">
        <div class="col-md-12">
           <div class="content clearfix">
                <!--starts here -->
                @foreach($addresses as $address)
                <div class="card m-b-0 bd-4 width-100p pos-rel w-100">
                    <div class="p-15 clearfix">
                        <p class="pull-left m-b-0 c-brand-green p-t-6">
                            <span><i class="fa fa-home"></i></span>
                            <span class="addressText"> {{$address->address}}</span>
                        </p>
                        <div class="pull-right"><button data-payload="{{$address->id}}" class="btn bg-transparent no-bd editBtn">Edit</button></div>
                    </div>

                    <input type="radio" name="address" class="addresses pos-abs">
                </div>
                @endforeach
                <!-- starts here end -->
            </div>

            <div class="content p-t-10 clearfix">
                <a href="/account/new-addresses"" class="btn btn-block bg-white bd-4 c-brand-green no-bd">Add New Address</a>
            </div>
        </div>
    </div>
    <!-- END PAGE BASE CONTENT -->
</div>
<!-- END CONTENT BODY -->

@endsection