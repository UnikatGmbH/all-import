@extends('all-import::layout.master')

@section('content')
	<div class="row">
		<div class="col-6 mt-5">
			<form action="{{ route('all-import.file-details', ['file' => $file]) }}" method="get">
				@foreach($tables as $table)
					<input type="radio" name="table" value="{{ $table }}"> {{$table}}<br>
				@endforeach
				<br>
				<input type="submit" value="Speichern">
			</form>
		</div>
	</div>
@endsection