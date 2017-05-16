@extends('layouts.login_dashboard')
@section('content')
	<div class="row" style="margin-top: 10%;">
			<div class="col-md-4 col-md-offset-4" >
				<div class="well">
					<form action="" method="POST" role="form">
                            {{csrf_field()}}
						
						<legend><center>
							Administrator's Login
						</center></legend>

						@if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @elseif(session('delete_message'))
                                <div class="alert alert-danger">
                                    {{ session('delete_message') }}
                                </div>
                                
                            @endif

						<div class="form-group">
							<label for="">Email:</label>
							<input type="text" name="email" class="form-control" id="" placeholder="Email address here"> <br>
								@if ($errors->has('email')) <p class="help-block" style="color: red">{{ $errors->first('email') }}</p> @endif
						</div>
						<div class="form-group">
							<label for="">Password:</label>
							<input type="password" name="password" class="form-control" id="" placeholder="Password here"> <br>
								@if ($errors->has('password')) <p class="help-block" style="color: red">{{ $errors->first('password') }}</p> @endif

						</div>
						<center>
							<button type="submit" class="btn btn-primary"> <i class="fa fa-key"></i> Signin</button>
						</center>
						
					</form>
				</div>
			</div>		

	</div>
@endsection