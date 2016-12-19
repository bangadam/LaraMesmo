@extends('templates.app')

@section('content')


@include('templates.nav')

<!-- Slider -->
<section id="home-slider">
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="{{ URL::to('images/nature1.jpg') }}"> <!-- random image -->
				<div class="caption center-align">
					<h3>This is our big Tagline!</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="{{ URL::to('images/nature2.jpg') }}"> <!-- random image -->
				<div class="caption left-align">
					<h3>Left Aligned Caption</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="{{ URL::to('images/nature3.jpg') }}"> <!-- random image -->
				<div class="caption right-align">
					<h3>Left Aligned Caption</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
		</ul>
	</div>

	<div id="button-slide">
		<a href="javascript:;" class="sl-prev">
			<i class="fa fa-angle-left fa-3x btn hoverable waves-light"></i>
		</a>
		<a href="javascript:;" class="sl-next">
			<i class="fa fa-angle-right fa-3x btn hoverable waves-light mg-rg"></i>
		</a>
	</div>
</section>

<section id="about">
		<div class="row">
			<div class="col m12">
				<h2 class="center-align header">About Us</h2>
				<div class="row">
					<div class="col m6 offset-m3" style="border-bottom: 2px solid #f0f0f0;"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col m7" style="border: 2px solid #f0f0f0;padding:20px;margin-bottom: 40px;margin-right: 10px;">
				<div class="row">
					<h3>Leader</h3>
				</div>
				<div class="row">
					<div class="col m4">
						<img src="{{ URL::to('images/nature4.jpg') }}" class="circle responsive-img" width="300">
					</div>
					<div class="col m8">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores animi quia modi officia minima delectus nostrum optio repellat recusandae earum, odit, eum ratione autem, nobis beatae quae tempora voluptatem, qui.</p>
					</div>
				</div>
				<div class="row">
					<a href="#!" class="btn blue lighten-2 right waves-effect waves-light"><i class="fa fa-user"></i> Join Us</a>
				</div>
			</div>
			<div class="col m4" style="margin-bottom: 40px">
				<div class="row blue-text lighten-2">
					<div class="card white center-align">
						<div class="card-content">
							<i class="fa fa-users fa-5x" style="float:left"></i>
							<h3>5000</h3>
						</div>
					</div>
				</div>
				<div class="row blue-text lighten-2">
					<div class="card white center-align">
						<div class="card-content">
							<i class="fa fa-calendar fa-5x" style="float:left"></i>
							<h3>5000</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<section id="portofolio">
		<div class="row">
			<div class="col m12">
				<h2 class="center-align header">Prestasi</h2>
				<div class="row">
					<div class="col m6 offset-m3" style="border-bottom: 2px solid #000000;"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col m3">
				<div class="card z-depth-3">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="{{ URL::to('images/nature1.jpg') }}">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Card Title<i class="fa fa-ellipsis-v right"></i></span>
				      <p><a href="#">This is a link</a></p>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="fa fa-close right"></i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
				  </div>
			</div>
			<div class="col m3">
				<div class="card z-depth-3">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="{{ URL::to('images/nature1.jpg') }}">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Card Title<i class="fa fa-ellipsis-v right"></i></span>
				      <p><a href="#">This is a link</a></p>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="fa fa-close right"></i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
				  </div>
			</div>
			<div class="col m3">
				<div class="card z-depth-3" id="collage">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="{{ URL::to('images/nature1.jpg') }}">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Card Title<i class="fa fa-ellipsis-v right"></i></span>
				      <p><a href="#">This is a link</a></p>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="fa fa-close right"></i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
				  </div>
			</div>
			<div class="col m3">
				<div class="card z-depth-3" id="collage">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="{{ URL::to('images/nature1.jpg') }}">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Card Title<i class="fa fa-ellipsis-v right"></i></span>
				      <p><a href="#">This is a link</a></p>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="fa fa-close right"></i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
				  </div>
			</div>
		</div>
</section>


<div class="row blue lighten-2" style="height: 500px;">
		<div class="row">
			<div class="col m12">
				<h3 class="center-align">Apa Kata Mereka ....</h3>
			</div>
		</div>
		<div class="col m4">
			<div class="card-panel">
				<div class="row valign-wrapper">
					<div class="col m6">
					<img src="{{ URL::to('images/nature4.jpg') }}" class="circle responsive-img" alt="">
				</div>
				<div class="col m6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos</p>
				</div>
				</div>
			</div>
		</div>
		<div class="col m4">
			<div class="card-panel">
				<div class="row valign-wrapper">
					<div class="col m6">
					<img src="{{ URL::to('images/nature4.jpg') }}" class="circle responsive-img" alt="">
				</div>
				<div class="col m6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos</p>
				</div>
				</div>
			</div>
		</div>
		<div class="col m4">
			<div class="card-panel">
				<div class="row valign-wrapper">
					<div class="col m6">
					<img src="{{ URL::to('images/nature4.jpg') }}" class="circle responsive-img" alt="">
				</div>
				<div class="col m6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos</p>
				</div>
				</div>
			</div>
		</div>
</div>


<section>
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="center-align">Contact Us</h1>
			</div>
		</div>

		<div class="row">
			<div class="col m6">
				<div class="card">
					<div class="card-content">
				<form action="" method="post">
					<div class="input-field">
						<input type="text" name="nama" id="nama" class="validate">
						<label for="Nama">Nama</label>
					</div>
					<div class="input-field">
						<input type="email" name="email" id="email" class="validate">
						<label for="Email">Email</label>
					</div>
					<div class="input-field">
						<input type="text" name="subject" id="subject" class="validate">
						<label for="Subject">Subject</label>
					</div>
					<div class="input-field">
						<textarea name="pesan" id="pesan" rows="3" class="materialize-textarea"></textarea>
						<label for="Nama">Pesan</label>
					</div>
					<div class="row">
						<button type="submit" class="btn waves-effect waves-light right">Kirim <i class="fa fa-send"></i></button>
					</div>
				</form>
					</div>
				</div>
			</div>
			<div class="col m6">
				<h5>About Us</h5>
				<ul>
					<li>lorem</li>
					<li>lorem</li>
					<li>ipsum</li>
				</ul>
			</div>
		</div>
	</div>
</section>


<footer class="page-footer teal">
		<p class="center-align" style="color: white;padding: 10px;">Copyright &copy; <?php echo date('Y'); ?> Bangadam. Made With <i class="fa fa-heart" style="color:#f73333"></i> SMKN 1 Dlanggu</p>
</footer>																					
@endsection																						