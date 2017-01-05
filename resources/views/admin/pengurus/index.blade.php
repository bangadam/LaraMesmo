@extends('admin.index')

@section('pengurus')
	
	<h5>Daftar Pengurus</h5>
		<nav>
		    <div class="nav-wrapper">
		      <div class="col s12">
		        <a href="#!" class="breadcrumb">First</a>
		        <a href="#!" class="breadcrumb">Second</a>
		        <a href="#!" class="breadcrumb">Third</a>
		      </div>
		    </div>
		</nav>
 	 {{-- Menu --}}	
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
						@if(Auth::user()->level == 'pembina')
						 <th>Hapus</th>
						@endif
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
								<a href="{{ route('pengurus.lihat', $datas->id) }}" class="waves-light waves-effect btn-floating"><i class="fa fa-eye"></i></a>
								@if(Auth::user()->level == 'pembina')
									<a href="{{ route('pengurus.edit', $datas->id) }}" class="waves-effect waves-light btn-floating"><i class="fa fa-pencil"></i></a>
								@endif
							</td>
							@if(Auth::user()->level == 'pembina')
								<td>
									<form action="{{ route('pengurus.hapus', $datas->id) }}" method="delete">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">

										<button type="submit" name="hapus" class="waves-effect waves-light btn-floating"><i class="fa fa-trash"></i></button>
									</form>
								</td>
							@endif
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div> {{-- End Menu --}}

@endsection