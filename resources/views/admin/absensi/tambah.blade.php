@extends('admin.index')

@section('anggota')

<div class="row">
	<h5>Tambah Absensi</h5>
	<hr>

		<div class="row">
				<a href="{{ route('absensi') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Back</a>
		</div>
	
	<div class="row">
		<div class="col m6">
			<div class="card">	
				<div class="card-content">	
					<form action="{{ route('absensi.tambah') }}" method="post">
						<label for="">Tanggal Absen</label>
						<div class="input-field">
							<input type="date" class="datepicker" name="tgl_absen">
						</div>
				</div>
			</div>
		</div>
		<div class="col m3">
			<div class="card">
				<div class="card-content">
					<h4 class="blue-text blue-lighten-2 center-align">Jam Absen</h4>
					<p class="center-align" style="font-size: 20px;font-weight: bold;">
					<?php
					 date_default_timezone_set("Asia/Jakarta"); 
					 $jam = date('H:i A'); 
					 echo $jam; ?>
						<input type="hidden" name="jam_absen" value="<?php echo $jam; ?>">
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="card">	
			 <div class="card-content">	
			 <nav class="white">
						<div class="nav-wrapper">
								<div class="row">
									<div class="col m6">
										<div class="input-field" style="color: black">
											<input id="search" type="text" name="search" style="padding-left: 30px">
											<label for="search"><i class="fa fa-search" style="color: black;padding-left: 20px"></i></label>
										</div>
									</div>
								</div>
						</div>
					</nav>
				<table class="striped" cellspacing="0" width="100%">	
					<thead>	
						<th>No Absen</th>
						<th>Nama Anggota</th>
						<th>Kelas Anggota</th>
						<th>Keterangan <small>(Pilih Salah Satu)</small></th>
					</thead>
					<tbody>	
					<?php $no = 1; ?>
						@foreach($data as $datas)
						 <tr>
						 	<td>{{ $no++ }}</td>
						 	<td>{{ $datas->nama }}</td>
						 	<td>{{ $datas->kelas->nama_kelas }}</td>
						 	<td>
									<input class="with-gap" name="keterangan[{{ $datas->id }}]" type="radio" value="Hadir" id="hadir{{ $datas->id }}" checked="" />
									<label for="hadir{{ $datas->id }}">Hadir</label>
									<input class="with-gap" name="keterangan[{{ $datas->id }}]" type="radio" value="Absen" id="absen{{ $datas->id }}" />
									<label for="absen{{ $datas->id }}">Absen</label>
									<input class="with-gap" name="keterangan[{{ $datas->id }}]" type="radio" value="Sakit" id="sakit{{ $datas->id }}" />
									<label for="sakit{{ $datas->id }}">Sakit</label>
						 		  
						 	</td>
						 </tr>
						@endforeach
					</tbody>	
				</table>

				<div class="row" style="margin-top: 10px;">
					<button type="submit" class="btn waves-light waves-effect blue accent-2">Tambah <i class="fa fa-send"></i></button>
				    <input type="hidden" name="_token" value="{{ csrf_token() }}">	
				</div>
				</form>
			 </div>
		</div>
	</div>

@section('search')
	<script type="text/javascript" src="{{ URL::to('js/search.js') }}"></script>
@endsection

@endsection