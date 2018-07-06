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
			  			<input type="text" name="nama" class="form-control" value="{{ $gurus->nama}}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jabatan</label>	
			  				<input type="text" name="jabatan" class="form-control" value="{{ $gurus->jabatan }}"  required>
			  		
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Poto</label>	
			  			<input type="text" name="poto" class="form-control" value="{{ $gurus->poto}}"  readonly>
			  			
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection