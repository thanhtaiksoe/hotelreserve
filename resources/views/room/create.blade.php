@extends("layouts.app")

@section("content")

<div class="row">
	<div class="col-md-12">
		<form method="post" action="{{ route('rooms.store') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="type">Type</label>
				<input name="type" type="text" class="form-control" id="Title" placeholder="Room Type">
			</div>
			<div class="form-group">
				<label for="rooms">Rooms</label>
				<input name="rooms" type="text" class="form-control" id="Title" placeholder="Room Type">
			</div>
			<!-- <div class="form-group">
				<select name="room_id" class="form-control">
					@foreach ($rooms as $key => $value)
						<option value={{ $key }}> {{ $value }}
						</option>
					@endforeach
				</select>
			</div> -->
			
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>
@endsection