@extends('admin.index')

@section('pembina')

		<h5>Daftar Pembina</h5>
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
			<a href="#!" style="margin-top: 20px;" class="waves-effect wave-light btn right"><i class="fa fa-plus"></i> Tambah</a>
		</div>	
		<div class="row">
			<table class="responsive-table striped">
				<thead>
					<tr>
						<th data-field="id">Name</th>
						<th data-field="name">Item Name</th>
						<th data-field="price">Item Price</th>
						<th data-field="price">Opsi</th>
					</tr>
				</thead>
			
				<tbody>
					<tr>
						<td>Alvin</td>
						<td>Eclair</td>
						<td>.87</td>
						<td>
							<a href="#!" class="waves-effect waves-light btn-floating"><i class="fa fa-pencil"></i></a>
							<a href="#!" class="waves-effect waves-light btn-floating"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					<tr>
						<td>Alan</td>
						<td>Jellybean</td>
						<td>name.76</td>
						<td>
							<a href="#!" class="waves-effect waves-light btn-floating"><i class="fa fa-pencil"></i></a>
							<a href="#!" class="waves-effect waves-light btn-floating"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				</tbody>
			</table>

			</div>
	</div> {{-- End Menu --}}

		

@endsection