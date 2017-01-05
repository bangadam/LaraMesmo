@extends('templates.app')

@section('content')

	<div class="container" style="margin-top: 40px;">
		<div class="row">
			<div class="col m6 offset-m3">
				<h4 class="center-align">Login <span class="blue-text lighten-2">Area</span></h4>
				
				@if(Session::has('pesan'))
				        <div class="card-panel red darken-1">
				          <h5 class="white-text center-align">{{ Session::get('pesan') }}</h5>
				          <ul class="white-text center-align">
				          	<li>Silahkan Masuk Dengan Akun Di Bawah Ini</li>
				          	<li>Username: anggota</li>
				          	<li>Password: anggota</li>
				          </ul>
				        </div>`
				@endif

				<div class="card">
					<div class="card-content">
						<form action="{{ route('auth.login') }}" method="post">
							<div class="input-field{{ $errors->has('username') ? ' has-error' : '' }}">
								<i class="fa fa-user prefix" style="color: #5EC1FA"></i>
								<input type="text" name="username" id="username" class="validate">
								<label for="">Username</label>
							@if($errors->has('username'))
								 <ul class="card-panel red darken-1">
		        					<p>{{ $errors->first('username') }}</p>
		        				 </ul>
							@endif
							</div>
							
							<div class="input-field{{ $errors->has('password') ? ' has-error' : '' }}">
								<i class="fa fa-lock prefix" style="color: #5EC1FA"></i>
								<input type="password" name="password" class="validate">
								<label for="">Password</label>
								@if($errors->has('password'))
									 <ul class="card-panel red darken-1">
			        					<p>{{ $errors->first('password') }}</p>
			        				 </ul>
								@endif
							</div>
							
							<div class="row">
								<div class="col m12">
									<button style="width: 100%;" class="btn waves-effect waves-light blue lighten-1" type="submit" name="login">Login</button>
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</div>
							</div>
						</form>
					</div>
				</div>

				{{-- register link --}}
				<div class="row">
					<a style="margin-left: 100px" href="{{ route('auth.register') }}" class="blue-text lighten-3">Belum Punya Akun ? Gabung bersama kami.</a>
				</div>
			</div>
		</div>
	</div>

@endsection