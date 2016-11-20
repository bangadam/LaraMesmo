@extends('templates.app')

@section('content')

	<div class="container" style="margin-top: 40px;">
		<div class="row">
			<div class="col m6 offset-m3">
				<h4 class="center-align">Login <span class="orange-text">Area</span></h4>
				@include('templates.alert')
				<div class="card">
					<div class="card-content">
						<form action="{{ route('auth.login') }}" method="post">
							<div class="input-field{{ $errors->has('username') ? ' has-error' : '' }}">
								<i class="fa fa-user prefix" style="color: teal"></i>
								<input type="text" name="username" id="username" class="validate">
								<label for="">Username</label>
							@if($errors->has('username'))
								 <ul class="card-panel red darken-1">
		        					<p>{{ $errors->first('username') }}</p>
		        				 </ul>
							@endif
							</div>
							
							<div class="input-field{{ $errors->has('password') ? ' has-error' : '' }}">
								<i class="fa fa-lock prefix" style="color: teal"></i>
								<input type="password" name="password" class="validate">
								<label for="">Password</label>
								@if($errors->has('password'))
									 <ul class="card-panel red darken-1">
			        					<p>{{ $errors->first('password') }}</p>
			        				 </ul>
								@endif
							</div>
							
							<div class="row">
								<div class="input-field col m11">		
								<i class="fa fa-user-secret prefix" style="color: teal"></i>	
								<select name="level" style="margin-left:40px;" id="level" class="browser-default">
									<option disabled selected>- Level -</option>
									<option value="admin">Admin</option>
									<option value="pembina">Pembina</option>
									<option value="anggota">Anggota</option>
								</select>
							</div>
							</div>
	

							<div class="row">
								<div class="col m12">
									<button style="width: 100%;" class="btn waves-effect waves-light" type="submit" name="login">Login</button>
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection