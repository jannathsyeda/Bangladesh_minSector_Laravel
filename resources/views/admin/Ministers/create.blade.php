@extends('layouts.backend.app')
@section('title')
    Ministers
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card mt-5">
                <div class="card-header  bg-dark text-white">
                  <h3 class="card-title float-left"><strong>Create Ministers</strong></h3>
              
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                


              @include('partialFolder.errors')

                <form action="{{ route('admin.Ministers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="name"> Name: </label>
                          <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" value="{{ old('name')}}">
                        </div>
                          <div class="form-group">
                          <label for="title"> Title: </label>
                          <input type="text" class="form-control" placeholder="Enter title" id="title" name="title" value="{{ old('title')}}">
                        </div>

                        <div class="form-group">
                          <label for="image"> Image: </label>
                         
                          <input type="file" id="file" class="form-control" onchange="readURL(this);" required="" name="image" >           
                    
                              <img  id="one">
                         </div>
             


                         <div class="form-group">

                          <label for="details">Details</label>
                          <input id="details" type="hidden" name="details" value="{{ old('details')}}">
                          <trix-editor input="details"></trix-editor>
                  </div>

                          
                    <div class="form-group">
                        <label >Gender: </label>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="gender" value="Male">Male <br>
                          <input type="radio" class="form-check-input" name="gender" value="Female">Female <br>
                          <input type="radio" class="form-check-input" name="gender" value="Other">Other <br>
            
                      </div>
                      
                      </div>
            

           <div class="form-group">

                  <label for="achievement">Achievements: </label><br>
                  <textarea class="form-control" id="achievement" type="text" name="achievement" value="{{ old('achievement')}}" >
                    </textarea>
          </div>

              <div class="form-group">
                    <button type="submit" class="btn btn-success">Create</button>
                    <a href="{{ URL::previous() }}" class="btn btn-danger wave-effect" >Back</a>
              </div>
                      

                  </form>
                 
                  
                </div>
               
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
        </div>
    </div>
</div><!-- /.container -->

@section('js')
<script src="{{ asset('js/trix.js') }}"></script>


<script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

@endsection

@section('css')
<link href="{{ asset('css/trix.css') }}" rel="stylesheet">
@endsection




@endsection