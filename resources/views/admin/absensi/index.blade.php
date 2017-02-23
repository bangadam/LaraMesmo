@extends('admin.index')

@section('pembina')

	<h5>Daftar Absensi</h5>
	<hr>	

	<div class="row">
			<ul class="tombol">
				@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'admin')
					<li>
						<a href="{{ route('absensi.tambah') }}" class="waves-effect waveslight btn blue accent-2"><i class="fa fa-plus"></i> Tambah</a>
					</li>
					<li><a  href="#modal1" class="waves-light waves-effect btn amber accent-4"><i class="fa fa-download"></i> Import</a></li>
				@endif
					<li><a href="#modal2" class="waves-light waves-effect btn green"><i class="fa fa-upload"></i> Export</a></li>
				<li><a href="#modal3" class="waves-light waves-effect btn grey darken-1"><i class="fa fa-print"></i> Print</a></li>
			</ul>
		</div>

	  <!-- Modal Import -->
	  <div id="modal1" class="modal">
	    <div class="modal-content">
	      <h4>Import File</h4>
	      	<span class="red-text red-lighten-2">Aturan Baku Import Data Absensi !</span>
	      	<img src="{{ URL::to('images/aturan_absensi.png') }}" width="" class="materialboxed"> 
	      		<form action="{{ route('absensi.import') }}" method="post" enctype="multipart/form-data">
			    <div class="file-field input-field">
			      <div class="btn grey darken-1">
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

	  <!-- Modal Export -->
	  <div id="modal2" class="modal">
	    <div class="modal-content">
	      <h4>Export File</h4>
	      	<span class="red-text red-lighten-2">Pilih Export Pada Tanggal !</span> 
	      		<form action="{{ url('absensi/downloadExcel/xlsx') }}" method="post">
			    <div class="input-field">
			      <input type="date" name="tgl_absen" class="datepicker" id="">
			    </div>
	    </div>
	    <div class="modal-footer">
	     	<button type="submit" class="btn waves-light waves-effect amber accent-4">Export <i class="fa fa-download"></i></button>
	     	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    </div>
	    </form>
	  </div>

	  <!-- Modal Print -->
	  <div id="modal3" class="modal">
	    <div class="modal-content">
	      <h4>Print Absensi</h4>
	      	<span class="red-text red-lighten-2">Pilih Data Pada Tanggal !</span> 
	      		<form action="{{ url('absensi/PrintPdf') }}" method="post">
			    <div class="input-field">
			      <input type="date" name="tgl_absen" class="datepicker" id="">
			    </div>
	    </div>
	    <div class="modal-footer">
	     	<button type="submit" class="btn waves-light waves-effect grey darken-1">Print <i class="fa fa-print"></i></button>
	     	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    </div>
	    </form>
	  </div>



		<div class="row">
			<div class="col m12">
				@include('templates.alert')	
					
				{{-- Table --}}
				<table id="example" class="mdl-data-table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Tanggal Absen</th>
						<th>Nama Anggota</th>
						<th>Keterangan</th>
						<th>Jam Absen</th>
						<th>Opsi</th>
						@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'admin')
						 <th>Hapus</th>
						@endif
					</tr>
				</thead>
				<tfoot>
		            <tr>
		                <th>Id</th>
						<th>Tanggal Absen</th>
						<th>Nama Anggota</th>
						<th>Keterangan</th>
						<th>Jam Absen</th>
						<th>Opsi</th>
						@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'admin')
						 <th>Hapus</th>
						@endif
		            </tr>
		        </tfoot>
			
				<tbody>
					@foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->tgl_absen }}</td>
							<td>{{ $datas->anggota->nama }}</td>
							<td>
								@if($datas->keterangan == 'Hadir')
								<span class="new badge blue">{{ $datas->keterangan }}</span>
								@elseif($datas->keterangan == 'Absen')
								<span class="new badge red">{{ $datas->keterangan }}</span>
								@elseif($datas->keterangan == 'Sakit')
								<span class="new badge green">{{ $datas->keterangan }}</span>
								@endif
							</td>
							<td>{{ $datas->jam_absen }}</td>
							<td>
								@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'admin')
									<a href="{{ route('absensi.edit', $datas->id) }}" class="waves-effect waves-light btn-floating amber accent-4"><i class="fa fa-pencil"></i></a>
								@endif
							</td>
							@if(Auth::user()->level == 'pembina' || Auth::user()->level == 'admin')
								<td>
									<form action="{{ route('absensi.hapus', $datas->id) }}" method="delete">
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