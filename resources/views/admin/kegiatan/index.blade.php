@extends('admin.index')

@section('pembina')
	
	<h5>Daftar Kegiatan</h5>
	<hr>
 	 {{-- Menu --}}
		<div class="row">
			<ul class="tombol">
				@if(Auth::user()->level == 'pembina')
					<li>
						<a href="{{ route('kegiatan.tambah') }}" class="waves-effect waveslight btn blue accent-2"><i class="fa fa-plus"></i> Tambah</a>
					</li>
					<li><a href="{{ url('pembina/downloadExcel/csv') }}" class="waves-light waves-effect btn green"><i class="fa fa-upload"></i> Export</a></li>
					<li><a  href="#modal1" class="waves-light waves-effect btn amber accent-4"><i class="fa fa-download"></i> Import</a></li>
				@endif
				<li><a href="" class="waves-light waves-effect btn grey lighten-1"><i class="fa fa-print"></i> Print</a></li>
			</ul>
		</div>

		@include('templates.alert')	

		<div class="row">
			<div class="col m12">
				<table id="TableId" class="mdl-data-table" width="100%">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nama Kegiatan</th>
							<th>Bidang</th>
							<th>Tanggal Pelaksanaan</th>
							<th>Pembina</th>
							<th>Opsi</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<tbody>
					 @foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->nama_kegiatan }}</td>
							<td>{{ $datas->bidang->nama_bidang }}</td>
							<td>{{ $datas->tgl_pel }}</td>
							<td>{{ $datas->pembina->nama }}</td>
							<td>
								@if(Auth::user()->level == 'pembina')
									<a href="{{ route('kegiatan.edit', $datas->id) }}" class="waves-effect waves-light btn-floating amber"><i class="fa fa-pencil"></i></a>
								@endif
							</td>
							@if(Auth::user()->level == 'pembina')
								<td>
									<form action="{{ route('kegiatan.hapus', $datas->id) }}" method="delete">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">

										<button type="submit" name="hapus" class="waves-effect waves-light btn-floating red"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							@endif
						</tr>
					 @endforeach
					</tbody>
				</table>
			</div>
		</div>

@endsection