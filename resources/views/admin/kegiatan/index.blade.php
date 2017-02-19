@extends('admin.index')

@section('pembina')
	
	<h5>Daftar Kegiatan</h5>
	<hr>
 	 {{-- Menu --}}
		<div class="row">
			<ul class="tombol">
				@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'admin')
					<li>
						<a href="{{ route('kegiatan.tambah') }}" class="waves-effect waveslight btn blue accent-2"><i class="fa fa-plus"></i> Tambah</a>
					</li>
					<li><a  href="#modal1" class="waves-light waves-effect btn amber accent-4"><i class="fa fa-download"></i> Import</a></li>
				@endif
					<li><a href="{{ url('kegiatan/downloadExcel/xlsx') }}" class="waves-light waves-effect btn green"><i class="fa fa-upload"></i> Export</a></li>
				<li><a href="{{ route('kegiatan.print') }}" class="waves-light waves-effect btn grey darken-1"><i class="fa fa-print"></i> Print</a></li>
			</ul>
		</div>

		<!-- Modal Structure -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4>Import File</h4>
		      <div class="row">
		      	<span class="red-text red-lighten-2">Aturan Baku Import Data Kegiatan !</span>
		      	<img src="{{ URL::to('images/aturan_kegiatan.png') }}" width="" class="materialboxed responsive-img" height="150" alt="">
		      </div>
		      		<form action="{{ route('kegiatan.import') }}" method="post" enctype="multipart/form-data">
				    <div class="file-field input-field">
				      <div class="btn grey lighten-1">
				        <span>File</span>
				        <input type="file" name="import_file">
				      </div>
				      <div class="file-path-wrapper">
				        <input class="file-path validate" type="text">
				      </div>
				    </div>
		    </div>
		    <div class="modal-footer">
		     	<button type="submit" class="btn waves-light waves-effect amber accent-4">Import <i class="fa fa-download"></i></button>
		     	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    </div>
		    </form>
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
							<th>Status</th>
							@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'admin' )
								<th>Opsi</th>
								<th>Hapus</th>
							@endif
						</tr>
					</thead>
					<tbody>
					 @foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->nama_kegiatan }}</td>
							<td>{{ $datas->bidang->nama_bidang }}</td>
							<td>{{ $datas->tgl_pel }}</td>
							<td>
								@if($datas->status == 'terlaksana')
									<span class="new badge green">{{ $datas->status }}</span>	
								@else
									<span class="new badge red">{{ $datas->status }}</span>
								@endif	
							</td>
								@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'admin')
							<td>
									<a href="{{ route('kegiatan.edit', $datas->id) }}" class="waves-effect waves-light btn-floating amber"><i class="fa fa-pencil"></i></a>
							</td>
								@endif
							@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'admin')
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