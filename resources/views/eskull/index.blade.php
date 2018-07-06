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
			    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Guru</div>
        <div class="card-body"><a href="{{ route('eskuls.create') }}">Tambah</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>  		<tr>
			  		<th>No</th>
			  		  <th>Nama</th>
					  <th>Poto</th>
					  <th>Content</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($eskuls as $data)
				  	  <tr>
				  	  <td>{{ $no++ }}</td>
				    	<td>{{ $data->nama}}</td>
						<td><p><a href="" class="thumbnail">
								<img src="../img/{{ $data->poto }}" width="100" height="100"></p></td>
						<td>{{ $data->content}}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('eskuls.edit',$data->id) }}">Edit</a>
						</td>
						<td>
						<a href="{{ route('eskuls.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
					
						<td>
							<form method="post" action="{{ route('eskuls.destroy',$data->id) }}">
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

	    