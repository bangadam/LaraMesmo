@extends('admin.index')

@section('anggota')

	<h5>Data Buku Tamu</h5>
	<hr>
 	 {{-- Menu --}}
		<div class="row">
			<ul class="tombol">
					<li><a href="{{ url('anggota/downloadExcel/xlsx') }}" class="waves-light waves-effect btn green"><i class="fa fa-upload"></i> Export</a></li>
				<li><a href="{{ route('anggota.print') }}" class="waves-light waves-effect btn grey darken-1"><i class="fa fa-print"></i> Print</a></li>
			</ul>
		</div>

		<div class="row">
			<div class="col m12">
				@include('templates.alert')
				{{-- Search --}}
				<div class="row">

				{{-- Table --}}
				<table id="TableId" class="mdl-data-table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Opsi</th>
						@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'admin')
						 <th>Hapus</th>
						@endif
					</tr>
				</thead>
			
				<tbody>
				<?php  $no = 1;  ?>
					@foreach($data as $datas)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $datas->nama }}</td>
							<td>{{ $datas->email }}</td>
							<td>{{ $datas->subject }}</td>
							<td>
								
									<a href="{{ route('bukutamu.balas', $datas->id) }}" class="waves-effect waves-light btn amber"><i class="fa fa-pencil"></i> Balas</a>
							</td>
							
								<td>
									<form action="" method="delete">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">

										<button type="submit" name="hapus" class="waves-effect waves-light btn-floating red"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div> {{-- End Menu --}}

@endsection