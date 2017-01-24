@extends('admin.index')

@section('anggota')

<div class="row">
	<h5>Tambah Absensi</h5>
	<hr>

		<div class="row">
				<a href="{{ route('absensi') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Back</a>
		</div>
		<div class="row">
			<div class="col m5">
				<div class="card">
					<div class="card-content">
						<form action="{{ route('absensi.tambah') }}" method="post">
							<label for="">Input Tanggal Absen</label>
							<div class="input-field">
								<input type="date" class="datepicker">
							</div>					
					</div>
				</div>
			</div>
			<div class="col m4">
				<div class="card">
					<div class="card-content">
						<p class="card-title center-align" style="font-size: 30px;">Jam Absen</p>
						<p class="center-align" style="font-size: 18px;" id="jam"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col m2">
					<button type="submit" class="btn waves-effect waves-light">Absen <i class="fa fa-send"></i></button>
					<input type="hidden" name="_method" value="{{ csrf_token() }}">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col m12">
				@include('templates.alert')
				{{-- Search --}}
				<div class="row">

				{{-- Table --}}
				<table id="TableId" class="mdl-data-table" cellspacing="4" width="100%">
				<thead>
					<tr>
						<th>No. Absen</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th><center> Keterangan <small>(Pilih Salah Satu)</small></center></th>
					</tr>
				</thead>
				
				<tbody>
					<?php $no = 1; ?>
					@foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->nama }}</td>
							<td>{{ $datas->kelas->nama_kelas }}</td>
							<td>
							<p>
							<center>
								<input type="checkbox" name="absen" id="absen{{ $datas->id }}" />
								<label for="absen{{ $datas->id }}">Absen</label>
								<input type="checkbox" name="sakit" id="sakit{{ $datas->id }}" />
								<label for="sakit{{ $datas->id }}">Sakit</label>
								<input type="checkbox" name="ijin" id="ijin{{ $datas->id }}" />
								<label for="ijin{{ $datas->id }}">Ijin</label>
							</center>
							</p>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div> {{-- End Menu --}}
	</form>
@endsection