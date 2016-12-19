@extends('admin.index')

@section('pengurus')

	<h5>Tambah Pengurus</h5>
		<nav>
		    <div class="nav-wrapper">
		      <div class="col s12">
		        <a href="#!" class="breadcrumb">First</a>
		        <a href="#!" class="breadcrumb">Second</a>
		        <a href="#!" class="breadcrumb">Third</a>
		      </div>
		    </div>
		</nav>

		<div class="row">
			<div class="col m6 offset-m2">
				<form action="{{ route('pengurus.tambah') }}" method="post">
					<div class="input-field">
						<select name="nama_anggota">
							<option value="" disabled selected>Pilih Anggota</option>
							@foreach($anggota as $anggotas)
								<option value="{{ $anggotas->id }}">{{ $anggotas->nama }}</option>
							@endforeach
						</select>
						<label>Nama anggota</label>
					</div>

					<div class="input-field">
						<select name="nama_anggota">
							<option value="" disabled selected>Pilih Jabatan</option>
							@foreach($pengurus as $penguruses)
								<option value="{{ $penguruses->id }}">{{ $penguruses->jabatan }}</option>
							@endforeach
						</select>
						<label>Jabatan</label>
					</div>

					<button type="reset" class="red reset btn waves-effect waves-light">Reset <i class="fa fa-circle-o-notch"></i></button>
					<button type="submit" class="btn waves-effect waves-light right">Tambah <i class="fa fa-send"></i></button>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					

				</form>
			</div>
		</div>
		</div>
@endsection