@extends('admin.index')

@section('pembina')

		<h5>Daftar Pembina</h5>
		<hr>

 	 {{-- Menu --}}
		<div class="row">
			<ul class="tombol">
				@if(Auth::user()->level == 'admin')
					<li>
						<a href="{{ route('pembina.tambah') }}" class="waves-effect waveslight btn blue accent-2"><i class="fa fa-plus"></i> Tambah</a>
						<li><a href="{{ url('pembina/downloadExcel/xlsx') }}" class="waves-light waves-effect btn green"><i class="fa fa-upload"></i> Export</a></li>
					</li>
					<li><a  href="#modal1" class="waves-light waves-effect btn amber accent-4"><i class="fa fa-download"></i> Import</a></li>
				@endif
				<li><a href="{{ route('pembina.print') }}" class="waves-light waves-effect btn grey lighten-1"><i class="fa fa-print"></i> Print</a></li>
			</ul>
		</div>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Import File</h4>
      		<form action="{{ route('pembina.import') }}" method="post" enctype="multipart/form-data">
		    <div class="file-field input-field">
		      <div class="btn">
		        <span>File</span>
		        <input type="file" name="import_file">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text">
		      </div>
		    </div>
    </div>
    <div class="modal-footer">
     	<button type="submit" class="btn waves-light waves-effect">Import</button>
     	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
    </form>
  </div>	

		<div class="row">
			<div class="col m12">
				@include('templates.alert')

				{{-- Table --}}
				<table id="TableId" class="mdl-data-table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Opsi</th>
						@if(Auth::user()->level == 'admin')
						 <th>Hapus</th>
						@endif
					</tr>
				</thead>
			
				<tbody>
					@foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->nama }}</td>
							<td>{{ $datas->jenis_kelamin }}</td>
							<td>{{ $datas->alamat }}</td>
							<td>
								<a href="{{ route('pembina.lihat', $datas->id) }}" class="waves-light waves-effect btn-floating green"><i class="fa fa-eye"></i></a>
								@if(Auth::user()->username == 'admin')
									<a href="{{ route('pembina.edit', $datas->id) }}" class="waves-effect waves-light btn-floating amber accent-4"><i class="fa fa-pencil"></i></a>
								@endif
							</td>
							@if(Auth::user()->username == 'admin')
								<td>
									<form action="{{ route('pembina.hapus', $datas->id) }}" method="delete">
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
		
	</div> {{-- End Menu --}}

		

@endsection