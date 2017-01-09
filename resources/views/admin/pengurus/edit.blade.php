@extends('admin.index')

@section('pengurus')

	<h5>Edit Pengurus</h5>
	<hr>

	<div class="row">
		<a href="{{ route('pengurus') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Back</a>
	</div>

		<div class="row">
			<div class="col m7">
				<div class="card z-depth-2">
					<div class="card-content">
						<h3 class="blue-text lighten-2 center-align">Ganti Pengurus</h3>
						<form action="{{ route('pengurus.update', $data->id) }}" method="post">
					<div class="input-field">
						<select name="nama_anggota">
							<option value="{{ $data->anggota->id }}" disabled>{{ $data->anggota->nama }}</option>
							@foreach($anggota as $anggotas)
								<option value="{{ $anggotas->id }}">{{ $anggotas->nama }}</option>
							@endforeach
						</select>
						<label>Nama Anggota</label>
					</div>

					<div class="row">
						<button type="submit" class="btn waves-effect waves-light right amber">Ganti  <i class="fa fa-pencil"></i></button>
					</div>
					<input type="hidden" name="_method" value="put">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
					</div>
				</div>
			</div>
			<div class="col md5">
				<div class="card">
					<div class="card-content">
						<div class="row">
							<img width="200" height="150" src="{{ URL::to('uploads/2016-12-30.koala.jpg') }}" alt="" class="circle materialboxed responsive-img">
						</div>
						<div class="row">
							<h3 class="blue-text lighten-2 center-align">{{ $data->jabatan }}</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
@endsection