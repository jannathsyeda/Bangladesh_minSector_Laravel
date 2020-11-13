@extends('layouts.backend.app')
@section('title')
    Ministers
@endsection
@section('content')


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">

                @include('partialFolder.successMessage')

                <div class="card mt-5">
                    <div class="card-header  bg-dark text-white">
                      <h3 class="card-title float-left p-0 m-0"><strong>Ministry Sectors</strong></h3>
                    <a href="{{route('admin.MinistrySectors.create')}}" class="btn btn-success btn-md float-right c-white">Add New <i class="fa fa-plus"></i></a>
                    </div>
                    <!-- card-header -->
                    @if ($Ministers->count() > 0)
                    <div class="card-body">
                    <div class="table-responsive">
                      <table id="dataTableId" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th width="10%">#</th>
                          <th>Minister Name</th>
                          <th>Image</th>

                          <th>Achievement</th>
                          <th>Gender</th>
                          <th>Details</th>
                          <th width="25%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($Ministers as $key=>$Minister)
                        <tr>
                          <td>{{ $key +1 }}</td>
                          <td>{{ $Minister->name }}</td>
                          <td>
                            <img style="height: 70px; width: 60px;"
                             class="img-fluid" src="{{ asset('storage/'.$Minister->image) }}" alt="image">
                          </td>
                          <td>{!! $Minister->achievement !!}</td>
                          <td>{{ $Minister->gender }}</td>
                          <td>{!! $Minister->description !!}</td>
                          <td> 
                            <a href="{{ route('admin.Ministers.edit', $Minister->id) }}" class="btn btn-info">Edit</a>
                             <button type="submit" onclick="handleDeleteMinister( {{ $Minister->id }}) " class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        @endforeach    
                        </tbody>
                      </table>
                    </div>

                     <!-- Modal -->
                <div class="modal fade" id="deleteMinisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <form action="" id="deleteMinisterForm" method="POST">
                          @csrf 
                          @method('DELETE')
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Minister Delete</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="text-center">Are you sure to delete this Minister?</div>
                                  </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">No, Go Back</button>
                                  <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                  </div>
                              </div>
                      </form>
                  </div>
              </div>
                      
                    </div>
                    @else 
                      <h2 class="text-center text-info font-weight-bold m-3">No Data Found</h2>
                    @endif
                    <div class="pagination">
                      {{ $Ministers->links() }}
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 @endsection

 @section('js')
   <script>
       function handleDeleteMinister(id){

          var form = document.getElementById('deleteMinisterForm')
          form.action = 'Ministers/' + id 
          $('#deleteMinisterModal').modal('show')
          //console.log(form)
       }
   </script>

@endsection