@extends("layouts.app")

@section("content")
<div class="row">
	<div class="col-md-12">
		<a class="btn btn-primary" href="{{ route('rooms.create') }}">Add Room</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		@if(count($rooms) < 1)
		<h1>No data</h1>
		@else
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Type</th>
					<th>Rooms</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($rooms as $room)
				<tr>
					<td>{{ $room->id }}</td>
					<td>{{ $room->type }}</td>
					<td>{{ $room->rooms }}</td>
					<td><a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">Edit</a>
					</td>
					<td>
						<form action="{{ route('rooms.destroy', $room->id) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('delete') }}
							<button class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $rooms->links() }}
		@endif 
	</div>
</div>

@endsection