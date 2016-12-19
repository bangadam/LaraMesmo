@extends('admin.index')

@section('anggota')

	<h5>Daftar Anggota</h5>
		<nav>
		    <div class="nav-wrapper">
		      <div class="col s12">
		        <a href="#!" class="breadcrumb">First</a>
		        <a href="#!" class="breadcrumb">Second</a>
		        <a href="#!" class="breadcrumb">Third</a>k
		      </div>
		    </div>
		</nav>
 	 {{-- Menu --}}
		<div class="row">
			<a href="{{ route('anggota.tambah') }}" style="margin-top: 20px;" class="waves-effect wave-light btn right"><i class="fa fa-plus"></i> Tambah</a>
		</div>	
		<div class="row">
			<div class="col m12">
				@include('templates.alert')
				{{-- Search --}}
				<div class="row">

				{{-- Table --}}
				<table id="TableId" class="mdl-data-table z-depth-2" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						{{-- <th>Jabatan</th> --}}
						<th>Opsi</th>
						<th>Hapus</th>
					</tr>
				</thead>
			
				<tbody>
					@foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->nama }}</td>
							<td>{{ $datas->jenis_kelamin }}</td>
							<td>{{ $datas->alamat }}</td>
							{{-- <td>{{ $datas->pengurus->jabatan }}</td> --}}
							{{-- <td>{{ $datas->pengurus->jabatan}}</td> --}}
							<td>
								<a href="{{ route('anggota.lihat', $datas->id) }}" class="waves-light waves-effect btn-floating"><i class="fa fa-eye"></i></a>
								<a href="{{ route('anggota.edit', $datas->id) }}" class="waves-effect waves-light btn-floating"><i class="fa fa-pencil"></i></a>
							</td>
							<td>
								<form action="{{ route('anggota.hapus', $datas->id) }}" method="delete">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<button type="submit" name="hapus" class="waves-effect waves-light btn-floating"><i class="fa fa-trash"></i></button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		{{-- <div class="row">
			<div class="col m12 offset-m2">
				{{ $data->render() }}
			</div>
		</div> --}}
	</div> {{-- End Menu --}}

	</div>
		

@endsection