@extends('admin.index')

@section('pembina')
	
	<h5>Daftar Kegiatan</h5>
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
				<table>
					<thead>
						<tr>
							<th>Id</th>
							<th>Nama Kegiatan</th>
							<th>Bidang</th>
							<th>Tanggal Pelaksanaan</th>
							<th>Opsi</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<tbody>
						<tr>
								
						</tr>
					</tbody>
				</table>
			</div>
		</div>

@endsection