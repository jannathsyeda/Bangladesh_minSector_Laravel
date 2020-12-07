@extends('layouts.frontend.app')

@section('title', 'minister Details')

@section('content')

<section  style="padding-bottom: 45px">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12 m-5">
			<div class="card ">
				<div class="card-header text-center"><strong><h1>Minister Details</h1></strong></div>
				<div class="card-body">
					<table class="table">
						<tr>
							<td width="20%"><img class="img-fluid " src="{{ asset('storage/ministers/'.$Ministers->image) }}" alt="image"></td>
						</tr>
						<tr>
							<th>Name:</th>
							<td>{{ $Ministers->name }}</td>
						</tr>
						<tr>
							<th>Designation:</th>
							<td>{{ $Ministers->title }}</td>
						</tr>
						<tr>
							<th>Achievement:</th>
							<td>{!!$Ministers->achievement!!}</td>
						</tr>
						<tr>
							<th>Gender:</th>
							<td>{{ $Ministers->gender }}</td>
						</tr>
						<tr>
							<th>Details:</th>
							<td>{!!$Ministers->details!!}</td>
						</tr>
					</table>
				</div>
				<div class="card-footer">
					<a href="{{ URL::previous() }}" class="btn btn-danger">Back</a>
				</div>
			</div>
		</div>	
	</div>
</div>
</section>
@endsection