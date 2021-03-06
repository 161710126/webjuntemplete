@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Tambah Data Dokter </b>
		<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
		</div>
	</div>
	<div class="panel-body">
		<form action="{{ route('gurus.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group {{$errors->has('nama') ? 'has-error' : '' }}">
				<label class="control-label">Nama</label>
				<input type="text"  name="nama" class="form-control" required>
				@if ($errors->has('nama'))
				<span class="help-block"><strong>{{ $errors->first('nama') }}</strong></span>
				@endif
			</div>

	<div class="form-group {{$errors->has('jabatan') ? 'has-error' : '' }}">
				<label class="control-label">Jabatan</label>
				<input type="text"  name="jabatan" class="form-control" required>
				@if ($errors->has('jabatan'))
				<span class="help-block"><strong>{{ $errors->first('jabatan') }}</strong></span>
				@endif
			</div>
			<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="poto" type="file" required>
                            </div>


			<div class="from-group">
				<button type="submit" class="btn btn-primary">Tambah</button>
			</div>

		</form>
	</div>
</div>
</div>
</div>
</div>
@endsection


