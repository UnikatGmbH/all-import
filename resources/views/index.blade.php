@extends('all-import::layout.master')

@section('content')
	<div class="row">
		<div class="col mt-5">
			<dropzone></dropzone>
		</div>
	</div>
	<div class="row">
		<div class="col mt-5">
			<table class="table">
				<thead>
				<tr>
					<th scope="col">Filename</th>
				</tr>
				</thead>
				<tbody>
				@foreach($files as $file)
					<tr>
						<td><a href="{{ route('all-import.file-details', ['file' => $file]) }}">{{ $file }}</a></td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection