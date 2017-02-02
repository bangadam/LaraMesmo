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
			 
				<table class="mdl-data-table responsive-table" cellspacing="0" width="100%">	
					<thead>	
						<th>Id Anggota</th>
						<th>Nama Anggota</th>
						<th>Kelas Anggota</th>
						<th>Keterangan <small>(Pilih Salah Satu)</small></th>
					</thead>
					<tbody>	
						@foreach($data as $datas)
						 <tr>
						 	<td>{{ $datas->id }}</td>
						 	<td>{{ $datas->nama }}</td>
						 	<td>{{ $datas->kelas->nama_kelas }}</td>
						 	<td>
									<input class="with-gap" name="keterangan[{{ $datas->id }}]" type="radio" value="Hadir" id="hadir{{ $datas->id }}" />
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
					<button type="submit" class="btn waves-light waves-effect">Tambah <i class="fa fa-send"></i></button>
				    <input type="hidden" name="_token" value="{{ csrf_token() }}">	
				</div>
				</form>
			 </div>
		</div>
	</div>


@endsection