@extends('layouts.frontend.app')

@section('title', 'minister Details')

@section('content')
<div class="container"style="margin-bottom:45px;">
    <div class="row">
        <div class="col-md-12">   
<div class="row" style="margin-top:30px;margin-bottom:20px;margin-left:8px;">
 
   <h3><span style="color:Red;">About</span> : Bangladesh</h3>
 
   
  
</div>



<div class="row">
   <div class="col-md-12">
   <img  src="{{ asset('storage/ministers/2020-12-03-5fc8fa891e56c.png') }}" 
                           alt="featured-image" class="img-responsive thumbnail" style="height:350px;width:550px;">
   
</div></div>
<div class="row" style="text-align: justify;margin: 20px 10px;">
  <h5> Description :

  </h5>
   <br><hr style="width:100%; margin-top:15px;">
  
  <p>is simply dummy text of the printing and typesetting industry.
       Lorem Ipsum has been the industry's standard dummy text ever 
       since the 1500s, when an unknown printer took a galley of type and 
       scrambled it to make a type specimen book. It has survived not only
        five centuries, but also the leap into electronic typesetting, 
        remaining essentially unchanged. It was popularised in the 1960s
         with the release of Letraset sheets containing Lorem Ipsum 
         passages, and more recently with desktop publishing software 
         like Aldus PageMaker including versions of Lorem Ipsum.is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
      like Aldus PageMaker including versions of Lorem Ipsum.</p>   
   <a href="{{ URL::previous() }}" class="btn btn-danger mt-3">Back</a>

</div>
</div>
    </div></div>
@endsection