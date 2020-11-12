@extends('layouts.backend.app')
@section('title')
    MinistrySectors
@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header  bg-dark text-white">
                      <h3 class="card-title float-left"><strong>MinistrySectors Create</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                                        @include('partialFolder.errors')


						<form action="{{ route('admin.MinistrySectors.store') }}" method="POST" >
					        @csrf

                    <div class="form-group">
                    <label for="sector"> Sector: </label>
                    <input type="text" class="form-control" placeholder="Enter Sector Name" id="sector" name="sector">
                  </div>

					   			 <div class="form-group">

						                <label for="description">Sector Description</label>
						                <input id="description" type="hidden" name="description" value="{{ old('description')}}">
						                <trix-editor input="description"></trix-editor>
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
@endsection

@section('css')
<link href="{{ asset('css/trix.css') }}" rel="stylesheet">
@endsection
      

@endsection