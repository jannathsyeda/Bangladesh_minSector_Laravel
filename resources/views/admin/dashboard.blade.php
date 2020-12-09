@extends('layouts.backend.app')

@section('title','dashboard')

@push('css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- <style>
    .box{
         background: cadetblue; padding: 40px;border-radius: 20%; margin-bottom: 20px;
    }
    .box:hover{
        opacity: .90;
        background-color: rgb(100, 128, 129)
    }
 </style>  --}}

@endpush

@section('content')



<span style="text-align:center;">  <h1> Admin Dashboard</h1></span>
<div class="d-flex justify-content-center">

	
	<div class="m-3" style="background-color:#138496;color:white;height:210px;width:210px;text-align: center">
<h4>All Ministers Count</h4>
		<h1>{{ $AllMinisters->count() }}</h1>
	</div>

	<div class="m-3" style="background-color:#138496;color:white;height:210px;width:210px;text-align: center">
		<h4 >All  Sectors Count</h4>

		<h1>{{ $AllSector->count() }}</h1>

	</div>
</div>


@endsection
@push('js')

@endpush