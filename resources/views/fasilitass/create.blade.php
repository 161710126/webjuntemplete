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
		<form action="{{ route('fasilitas.store') }}" method="post">
			{{ csrf_field() }}
			<div class="form-group {{$errors->has('nama') ? 'has-error' : '' }}">
				<label class="control-label">Nama</label>
				<input type="text"  name="nama" class="form-control" required>
				@if ($errors->has('nama'))
				<span class="help-block"><strong>{{ $errors->first('nama') }}</strong></span>
				@endif
			</div>
			<div class="form-group {{$errors->has('poto') ? 'has-error' : '' }}">
				<label class="control-label">poto</label>
				<input type="file" id="poto" name="poto" class="validate" accept="image/*" required>
				@if ($errors->has('poto'))
				<span class="help-block"><strong>{{ $errors->first('poto') }}</strong></span>
				@endif
			</div>

	<div class="form-group {{$errors->has('kategorifasilitas_id') ? 'has-error' : '' }}">
				<label class="control-label">kategorifasilitas_id</label>
				<input type="text"  name="kategorifasilitas_id" class="form-control" required>
				@if ($errors->has('kategorifasilitas_id'))
				<span class="help-block"><strong>{{ $errors->first('kategorifasilitas_id') }}</strong></span>
				@endif
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


