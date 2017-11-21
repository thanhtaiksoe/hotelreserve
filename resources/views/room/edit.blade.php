@extends("layouts.app")

@section("content")
<div class="row">
	<div class="col-md-12">
		<form action="{{ route('rooms.update', $room->id) }}" method="post">
			{{ csrf_field() }}
			{{ method_field("patch")}}
			<div class="form-group">
				<label class="control-label" for="type">Room Type</label>
				<br>
				@if($errors->has('type'))
				<label class="text-danger" for="type"><small>{{ $errors->first('type') }}</small></label>
				@endif
				<input class="form-control" type="text" name="type" value="{{ $room->type ? $room->type : old('type') }}" />
			</div>
			<div class="form-group">
				<label class="control-label" for="rooms">Rooms</label>
				<br>
				@if($errors->has('rooms'))
				<label class="text-danger" for="rooms"><small>{{ $errors->first('rooms') }}</small></label>
				@endif
				<input class="form-control" type="text" name="rooms" value="{{ $room->rooms ? $room->rooms : old('rooms') }}" />
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</div>
@endsection