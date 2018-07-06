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
			  	<form action="{{ route('kategorisartikel.update',$kartikel->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama_artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama_artikel</label>	
			  			<input type="text" name="nama_artikel" class="form-control" value="{{ $kartikel->nama_artikel }}"  required>
			  			@if ($errors->has('nama_artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_artikel') }}</strong>
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