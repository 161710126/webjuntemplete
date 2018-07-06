@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Aceh
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama </label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $eskuls->nama}}"  readonly>
			  		</div>

			  		
			  		
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Poto</label>	
			  			<input type="text" name="poto" class="form-control" value="{{ $eskuls->poto}}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
			  			<label class="control-label">content</label>	
			  				<input type="text" name="content" class="form-control" value="{{ $eskuls->content }}"  required>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection