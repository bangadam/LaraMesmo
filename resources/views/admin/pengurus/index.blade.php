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
			<a href="{{ route('pembina.tambah') }}" style="margin-top: 20px;" class="waves-effect wave-light btn right"><i class="fa fa-plus"></i> Tambah</a>
		</div>	
		<div class="row">

				{{-- Table --}}
				<table id="TableId" class="mdl-data-table z-depth-2" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Opsi</th>
						<th>Hapus</th>
					</tr>
				</thead>
				{{-- {{ dd($data->anggota) }} --}}
				<tbody>
					@foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->anggota->nama }}</td>
							<td>{{ $datas->jabatan }}</td>
							<td>
								<a href="{{ route('pembina.lihat', $datas->id) }}" class="waves-light waves-effect btn-floating"><i class="fa fa-eye"></i></a>
								<a href="{{ route('pembina.edit', $datas->id) }}" class="waves-effect waves-light btn-floating"><i class="fa fa-pencil"></i></a>
							</td>
							<td>
								<form action="{{ route('pembina.hapus', $datas->id) }}" method="delete">
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
		<div class="row">
			<div class="col m12 offset-m2">
				{{-- {{ $data->render() }} --}}
			</div>
		</div>
	</div> {{-- End Menu --}}

@endsection