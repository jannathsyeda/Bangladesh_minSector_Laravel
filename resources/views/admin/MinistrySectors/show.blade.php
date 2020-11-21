@extends('layouts.backend.app')
@section('title')
MinistrySector Details
@endsection
@section('content')


<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12 m-5">
			<div class="card">
				<div class="card-header"><strong>Details</strong></div>
				<div class="card-body">
					<table class="table">
					<tr>
                            <th width="20%">Sector Name:</th>
							<td>{{ $MinistrySector->sector }}</td>
						</tr>
						<tr>
							<th>Description:</th>
							<td>{!!$MinistrySector->description!!}</td>
						</tr>
					</table>
				</div>
				<div class="card-footer">
					<a href="{{ route('admin.MinistrySectors.edit', $MinistrySector->id) }}" class="btn btn-info">Edit</a>
					<a href="{{ URL::previous() }}" class="btn btn-danger">Back</a>
				</div>
			</div>
		</div>	
	</div>
</div>


@endsection