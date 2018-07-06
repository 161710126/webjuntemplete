@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"><h3>Data Guru</h3>
			  	<div class="panel-title pull-right"><a href="{{ route('fasilitas.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive table--no-card m-b-40">
				  <table class="table table-borederless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		<th>No</th>
			  		  <th>Nama</th>
					  <th>Poto</th>
					  <th>kategorifasilitas_id</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($fasilitas as $data)
				  	  <tr>
				  	  <td>{{ $no++ }}</td>
				    	<td>{{ $data->nama}}</td>
						<td><p><a href="" class="thumbnail">
								<img src="{{ asset ('assets/img/imagess/'.$data->poto) }}" width="100" height="100"></p></td>
						<td>
						<td>
							<a class="btn btn-warning" href="{{ route('fasilitas.edit',$data->id) }}">Edit</a>
						</td>
						<td>
						<a href="{{ route('fasilitas.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
					
						<td>
							<form method="post" action="{{ route('fasilitas.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>

				      @endforeach	
				  	</tbody>
				  </table>
				 
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection

	    