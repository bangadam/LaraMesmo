@extends('admin.index')

@section('pembina')

<div class="row">
	<h5>Lihat Pembina</h5>
	<hr>	
</div>

<div class="row">
	<a href="{{ route('pembina') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>

<div class="row">
	<div class="col m7 offset-m3">
		<h3 class="blue-text blue-lighten-2 center-align">Biodata Pembina</h3>
				<div class="card z-depth-3">
					<div class="card-image">
						<img src="{{ asset('uploads/'. $data->gambar) }}" class="materialboxed">
						<span class="card-title blue-text blue-lighten-2">{{ $data->nama }}</span>
					</div>
					<div class="card-content">
						<ul class="collection">
						   <li class="collection-item avatar">
						      <i class="fa fa-envelope circle grey darken-2"></i>
						      <span class="title">{{ $data->email }}</span>
						    </li>
						    <li class="collection-item avatar">
						      <i class="fa fa-birthday-cake circle brown darken-2"></i>
						      <span class="title">{{ $data->tgl_lahir }}</span>
						    </li>
						    <li class="collection-item avatar">
						     @if($data->jenis_kelamin == 'pria')
						      <i class="fa fa-male circle red"></i>
						      @else
						      <i class="fa fa-female circle blue"></i>
						      @endif
						      <span class="title">{{ $data->jenis_kelamin }}</span>
						    </li>
						    <li class="collection-item avatar">
						      <i class="fa fa-home circle green"></i>
						      <span class="title">{{ $data->alamat }}</span>
						    </li>
						    <li class="collection-item avatar">
						      <i class="fa fa-phone circle amber"></i>
						      <span class="title">{{ $data->no_hp }}</span>
						    </li>
						 </ul>   
					</div>
					@if(Auth::user()->level == 'admin')
						<div class="card-action">
							<a href="{{ route('pembina.edit', $data->id) }}" class="btn waves-light waves-effect amber accent-4">Edit <i class="fa fa-pencil"></i></a>
						</div>
					@endif
				</div>
	</div>
</div>

@endsection