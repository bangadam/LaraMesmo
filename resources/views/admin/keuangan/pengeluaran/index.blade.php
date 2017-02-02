@extends('admin.index')

@section('pembina')
	
	<h5>Pengeluaran Mesmo</h5>
	<hr>
 	 {{-- Menu --}}
		<div class="row">
			<ul>
				<li>
					<a href="{{ route('keuangan') }}" class="btn red waves-effect waves-light"><i class="fa fa-arrow-left"></i> Kembali</a>
				</li>
			</ul>
			<ul class="tombol right">
				@if(Auth::user()->level == 'pembina')
					<li>
						<a href="{{ route('pengeluaran.tambah') }}" class="waves-effect waveslight btn blue accent-2"><i class="fa fa-plus"></i> Tambah</a>
					</li>
					<li><a  href="#modal1" class="waves-light waves-effect btn amber accent-4"><i class="fa fa-download"></i> Import</a></li>
				@endif
				<li><a href="{{ url('keuangan/pengeluaran/downloadExcel/xlsx') }}" class="waves-light waves-effect btn green"><i class="fa fa-upload"></i> Export</a></li>
				<li><a href="{{ route('pengeluaran.print') }}" class="waves-light waves-effect btn grey darken-2"><i class="fa fa-print"></i> Print</a></li>
			</ul>
		</div>

		 <!-- Modal Structure -->
	  <div id="modal1" class="modal">
	    <div class="modal-content">
	      <h4>Import File</h4>
	      		<form action="{{ route('pengeluaran.import') }}" method="post" enctype="multipart/form-data">
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
							<th>Jumlah Uang</th>
							<th>Pemasukan Dari</th>
							<th>Tanggal Pemasukan</th>
							@if(Auth::user()->level == 'pembina')
								<th>Opsi</th>
								<th>Hapus</th>
							@endif
						</tr>
					</thead>
					<tfoot>
							<th>Total</th>
							<th>Rp. {{ $total }}</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
					</tfoot>
					<tbody>
					 @foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>Rp. {{ $datas->jumlah_uang }}</td>
							<td>{{ $datas->keperluan }}</td>
							<td>{{ $datas->tgl_pengeluaran }}</td>
							<td>
								@if(Auth::user()->level == 'pembina')
									<a href="{{ route('pengeluaran.edit', $datas->id) }}" class="waves-effect waves-light btn-floating amber"><i class="fa fa-pencil"></i></a>
								@endif
							</td>
							@if(Auth::user()->level == 'pembina')
								<td>
									<form action="{{ route('pengeluaran.hapus', $datas->id) }}" method="delete">
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