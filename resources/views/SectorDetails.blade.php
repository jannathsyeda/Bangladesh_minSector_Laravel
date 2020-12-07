@extends('layouts.frontend.app')

@section('title', 'Sector Details')

@section('content')

<div class="container"style="margin-bottom:45px;">
         <div class="row">
             <div class="col-md-12">   
    <div class="row" style="margin-top:30px;margin-bottom:20px;margin-left:8px;">
      
        <h3><span style="color:Red;">Sector Name</span> : {{ $Sector->sector }}</h3>
      
        
       
    </div>
    
    
    
    <div class="row">
        <div class="col-md-12">
        <img  src="{{ asset('storage/ministers/'.$Sector->image) }}" 
                                alt="featured-image" class="img-responsive thumbnail" style="height:350px;width:550px;">
        
    </div></div>
    <div class="row" style="text-align: justify;margin: 20px 10px;">
       <h5> Description :

       </h5>
        <br><hr style="width:100%; margin-top:15px;">
       
        {!! $Sector->description !!}     
        <a href="{{ URL::previous() }}" class="btn btn-danger mt-3">Back</a>

    </div>
</div>
         </div></div>

@endsection