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
                  <h3 class="card-title float-left"><strong>Edit Ministers</strong></h3>
              
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                


              @include('partialFolder.errors')

              <form action="{{ route('admin.Ministers.update',$Ministers->id) }}" method="POST" enctype="multipart/form-data" >                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="name"> Name: </label>
                          <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" value="{{ old('name',$Ministers->name) }}">
                        </div>
                          <div class="form-group">
                          <label for="title"> Title: </label>
                          <input type="text" class="form-control" placeholder="Enter title" id="title" name="title" value="{{ old('title',$Ministers->title) }}">
                        </div>

                        <div class="form-group">
                            <label for="image"> Image: </label>
                            <input type="file" class="form-control" id="image" name="image">
                      </div>

                         <div class="form-group">

                            <label for="image"> Old Image</label>
                            <img src="{{ asset('storage/ministers/'.$Ministers->image) }}" height="80px;" width="60px;">
                          <input type="hidden" name="old_image" value="{{ $Ministers->image }}">   
        
                              </div>
             


                         <div class="form-group">

                          <label for="details">Details</label>
                          <input id="details" type="hidden" name="details" value="{{ old('details',$Ministers->details)}}">
                          <trix-editor input="details"></trix-editor>
                  </div>

                          
                    <div class="form-group">
                        <label >Gender: </label>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" name="gender" value="{{$Ministers->gender}}" {{ ($Ministers->gender=='Male') ? 'checked' : ''  }} >Male <br>
                          <input type="radio" class="form-check-input" name="gender" value="{{$Ministers->gender}}" {{ ($Ministers->gender=='Female') ? 'checked' : ''  }} >Female <br>
                          <input type="radio" class="form-check-input" name="gender" value="{{$Ministers->gender}}" {{ ($Ministers->gender=='Other') ? 'checked' : ''  }} >Other <br>
            
                      </div>
                      
                      </div>
            

           <div class="form-group">

                  <label for="achievement">Achievements: </label><br>
                  <textarea class="form-control" id="achievement" type="text" name="achievement">
                    {!!$Ministers->achievement!!}</textarea>
          </div>

              <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
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
@endsection

@section('css')
<link href="{{ asset('css/trix.css') }}" rel="stylesheet">
@endsection
      

@endsection