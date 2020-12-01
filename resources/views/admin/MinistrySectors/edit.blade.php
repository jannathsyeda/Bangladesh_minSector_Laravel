@extends('layouts.backend.app')
@section('title')
    MinistrySectors
@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header  bg-dark text-white">
                      <h3 class="card-title float-left"><strong>Edit Sector</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                                        @include('partialFolder.errors')


						<form action="{{ route('admin.MinistrySectors.update',$MinistrySector->id) }}" method="POST" enctype="multipart/form-data">
					        @csrf
                  @method('PUT')
                    <div class="form-group">
                    <label for="sector"> Sector: </label>
                    <input type="text" class="form-control" placeholder="Enter Sector Name" id="sector" name="sector" value="{{ old('sector',$MinistrySector->sector) }}" >
                  </div>

                  <div class="form-group">
                            <label for="image"> Image: </label>
                            <input type="file" class="form-control" id="image" name="image">
                      </div>

                         <div class="form-group">

                            <label for="image"> Old Image</label>
                            <img src="{{ asset('storage/ministers/'.$MinistrySector->image) }}" height="80px;" width="60px;">
                          <input type="hidden" name="old_image" value="{{ $MinistrySector->image }}">   
        
                              </div>
             

					   			 <div class="form-group">

						                <label for="description">Sector Description</label>
		<input id="description" type="hidden" name="description"  value="{{ old('description', isset($MinistrySector) ? $MinistrySector->description : '' ) }}">
						                <trix-editor input="description"></trix-editor>
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