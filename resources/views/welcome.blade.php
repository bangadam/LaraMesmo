@extends('templates.app')

@section('content')


@include('templates.nav')

<!-- Slider -->
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


<section style="height: 500px;">
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h1 class="center-align">Visi Misi</h1>
			</div>
		</div>
		<div class="row">
			<div class="col m4">
				<i class="fa fa-users fa-5x" style="color: teal;"></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint maxime repudiandae beatae, incidunt temporibus dignissimos asperiores qui excepturi cum optio illo sapiente, aut iste, eaque a, maiores saepe ea fuga.</p>
			</div>
			<div class="col m4">
				<i class="fa fa-users fa-5x" style="color: teal;"></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint maxime repudiandae beatae, incidunt temporibus dignissimos asperiores qui excepturi cum optio illo sapiente, aut iste, eaque a, maiores saepe ea fuga.</p>
			</div>
			<div class="col m4">
				<i class="fa fa-users fa-5x" style="color: teal;"></i>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint maxime repudiandae beatae, incidunt temporibus dignissimos asperiores qui excepturi cum optio illo sapiente, aut iste, eaque a, maiores saepe ea fuga.</p>
			</div>
		</div>
	</div>
</section>

<section style="background-color: teal;height: 500px;">
	<!-- carousel -->
	<div class="container">

		<div class="row">
			<div class="col m12">
				<h1 class="center-align">Portofolio</h1>
			</div>
		</div>
	
		<div class="row">
			<div class="col m12">
				<div class="carousel">
					<a href="#!" class="carousel-item">
						<img src="{{ URL::to('images/nature4.jpg') }}" width="300" height="200" alt="">
					</a>
					<a href="#!" class="carousel-item">
						<img src="{{ URL::to('images/nature4.jpg') }}" width="300" height="200" alt="">
					</a>
					<a href="#!" class="carousel-item">
						<img src="{{ URL::to('images/nature4.jpg') }}" width="300" height="200" alt="">
					</a>
					<a href="#!" class="carousel-item">
						<img src="{{ URL::to('images/nature4.jpg') }}" width="300" height="200" alt="">
					</a>
					<a href="#!" class="carousel-item">
						<img src="{{ URL::to('images/nature4.jpg') }}" width="300" height="200" alt="">
					</a>
					<a href="#!" class="carousel-item">
						<img src="{{ URL::to('images/nature4.jpg') }}" width="300" height="200" alt="">
					</a>
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