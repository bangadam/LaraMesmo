@extends('admin.index')

@section('pengurus')
	
	<h5>Daftar Pengurus</h5>
	<hr>
 	 {{-- Menu --}}	
 	 <div class="row">
			<ul class="tombol">
				@if(Auth::user()->level == 'pembina')
					<li><a href="{{ url('pengurus/downloadExcel/xlsx') }}" class="waves-light waves-effect btn green"><i class="fa fa-upload"></i> Export</a></li>
				@endif
				<li><a href="{{ route('pengurus.print') }}" class="waves-light waves-effect btn grey darken-1"><i class="fa fa-print"></i> Print</a></li>
			</ul>
		</div>

		@include('templates.alert')	

		<div class="row">

				{{-- Table --}}
				<table id="TableId" class="mdl-data-table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Jabatan</th>
						<th>Opsi</th>
					</tr>
				</thead>
			
				<tbody>
					@foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->anggota->nama }}</td>
							<td>{{ $datas->anggota->kelas->nama_kelas }}</td>
							<td>{{ $datas->jabatan }}</td>
							<td>
								<a href="{{ route('anggota.lihat', $datas->anggota->id) }}" class="waves-light waves-effect btn-floating green"><i class="fa fa-eye"></i></a>
								@if(Auth::user()->level == 'pembina')
									<a href="{{ route('pengurus.edit', $datas->id) }}" class="waves-effect waves-light btn-floating amber"><i class="fa fa-pencil"></i></a>
								@endif
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div> {{-- End Menu --}}

@endsection