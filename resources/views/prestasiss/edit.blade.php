@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Dokter
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('fasilitas.update',$fasilitas->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $fasilitas->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

	                <div class="form-group {{ $errors->has('poto') ? ' has-error' : '' }}">
			  			<label class="control-label">poto</label>	
			  			<input type="file" name="poto" class="form-control" value="{{ $fasilitas->poto }}"  required>
			  			@if ($errors->has('poto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('poto') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		 <div class="form-group {{ $errors->has('kategorifasilitas_id') ? ' has-error' : '' }}">
			  			<label class="control-label">kategorifasilitas_id</label>	
			  			<input type="text" name="kategorifasilitas_id" class="form-control" value="{{ $fasilitas->kategorifasilitas_id }}"  required>
			  			@if ($errors->has('kategorifasilitas_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategorifasilitas_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection