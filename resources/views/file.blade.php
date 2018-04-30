@extends('all-import::layout.master')

@section('content')
	<div class="row">
		<div class="col-6 mt-5">
			&lt;rootElement&gt;<br>
			<div class="inner-columns">
				@foreach($fields as $key => $field)
					<div class="draggable uploaded-column" data-field="{{$field}}">&lt;{{ $field }}&gt;&lt;/{{ $field }}&gt;</div><br>
				@endforeach
			</div>
			&lt;/rootElement&gt;
		</div>
		<div class="col-6 mt-5">
			<form action="{{ route('all-import.insert') }}" method="post">
				&lt;targetTable&gt;<br>
				<div class="inner-columns">
					@foreach($remoteFields as $remoteField)
						{{--&lt;{{ $remoteField }}&gt;--}}
						{{ $remoteField }}: <input class="droppable target-column" type="text" name="{{ $remoteField }}" title="{{ $remoteField }}">
						<br>
						{{--&lt;/{{ $remoteField }}&gt;<br>--}}
					@endforeach
				</div>
				&lt;/targetTable&gt;<br>
				<br>
				<input type="hidden" name="path" value="{{ $path }}">
				<input type="submit" value="Speichern">
			</form>
		</div>
	</div>
@endsection