@extends('admin.index')

@section('pembina')
	
	<h5>Keuangan Mesmo</h5>
	<hr>

	<div class="row">
		<div class="col m4 offset-m2">
				<div class="card hoverable amber accent-4">
					<div class="card-content">
						<div class="row">
							<div class="col m3 white-text">
								<span class="fa fa-book fa-5x"></span>
							</div>
							<div class="col m8">
								<a href="{{ route('pemasukan') }}" class="white-text"><h4>Pemasukan</h4></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="col m4">
				<div class="card hoverable green">
					<div class="card-content">
						<div class="row">
							<div class="col m3 white-text">
								<span class="fa fa-book fa-5x"></span>
							</div>
							<div class="col m8">
								<a href="{{ route('pengeluaran') }}" class="white-text"><h4>Pengeluaran</h4></a>
							</div>
						</div>
					</div>
				</div>
			</div>	
	</div>

	<div class="row">
		<div class="col m5" style="margin-left: 100px;">
				<div class="collection">
					<a href="#!" class="collection-item center-align" style="font-size: 17px;">
					 <i class="fa fa-download fa-3x fa-pull-left" style="margin-bottom: 5px;"></i>
					 <br>Pemasukan Terakhir : Rp. @if(!count($pemasukan) > 0) 
						0
					@else
						{{ $pemasukan->jumlah_uang . ',00' }}
					@endif
					</a>
				</div>
				<div class="collection">
					<a href="#!" class="collection-item center-align" style="font-size: 17px;">
					 <i class="fa fa-refresh fa-spin fa-3x fa-pull-left" style="margin-bottom: 5px;margin-right: "></i>
					 <br>Total Pemasukan Keseluruhan : Rp. @if(!count($total1) > 0) 
						0
					@else
						{{ $total1 . ',00' }}
					@endif
					</a>
				</div>
		</div>
		<div class="col m5">
			<div class="collection">
				<a href="#!" class="collection-item center-align" style="font-size: 17px;">
				 <i class="fa fa-upload fa-3x fa-pull-left" style="margin-bottom: 5px;"></i>
				 <br>Pengeluaran Terakhir : Rp. @if(!count($pengeluaran) > 0) 
					0
				@else
					{{ $pengeluaran->jumlah_uang . ',00' }}
				@endif
				</a>
			</div>
			<div class="collection">
				<a href="#!" class="collection-item center-align" style="font-size: 17px;">
				 <i class="fa fa-refresh fa-spin fa-pull-left fa-3x" style="margin-bottom: 5px;"></i>
				 <br>Total Pengeluaran Keseluruhan : Rp. @if(!count($total2) > 0) 
					0
				@else
					{{ $total2 . ',00' }}
				@endif
				</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col m6 offset-m3">
			<div class="collection">
				<a href="#!" class="collection-item center-align" style="font-size: 17px;">
				 <i class="fa fa-money fa-pull-left fa-3x" style="margin-bottom: 5px;"></i>
				 <br>Total Keuangan Mesmo Keseluruhan : Rp. @if(!count($total2) > 0) 
					0
				@else
					{{ $hasil . ',00' }}
				@endif
				</a>
			</div>
		</div>
	</div>
@endsection