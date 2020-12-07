@extends('layouts.backend.app')
@section('title')
   All Setors
@endsection
@section('content')


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @include('partialFolder.successMessage')







                <div class="card mt-5">
                    <div class="card-header  bg-dark text-white">
  
                      <h3 class="card-title float-left p-0 m-0"><strong>All Sectors</strong></h3>
                    <a href="{{route('admin.MinistrySectors.create')}}" class="btn btn-success btn-md float-right c-white">Add New <i class="fa fa-plus"></i></a>
                    </div>
             <!-- card-header -->
                    @if ($Sectors->count() > 0)
                    <div class="card-body">
                    <div class="table-responsive">
                      <table id="dataTableId" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th >#</th>
                          <th>Sector Name</th>
                            <th width="25%">Image</th>
                          <th>Created At</th>
                          <th >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($Sectors as $key=>$sector)
                        <tr>
                          <td>{{ $key +1 }}</td>
                          <td>{{ $sector->sector }}</td>
                            <td>
                            <img style="height: 70px; width: 60px;"
                             class="img-fluid" src="{{ asset('storage/ministers/'.$sector->image) }}" alt="image">
                          </td>
                          <td> {{ $sector->created_at->diffforhumans() }}</td>
                          <td> 
                            <a href="{{ route('admin.MinistrySectors.show', $sector->id) }}" class="btn btn-success">Details</a>
                            <a href="{{ route('admin.MinistrySectors.edit', $sector->id) }}" class="btn btn-info">Edit</a>

                             <button type="button" onclick="deletePost({{ $sector->id }})" class="btn btn-danger">Delete</button>

                            <!--  <button class="btn btn-danger" type="button" onclick="deletePost({{ $sector->id }})">
           
                                  </button> -->

            <form id="delete-form-{{ $sector->id }}" action="{{ route('admin.MinistrySectors.destroy',$sector->id) }}" method="POST" style="display: none;">
              @csrf
              @method('DELETE')
           </form>
                          </td>
                        </tr>
                        @endforeach    
                        </tbody>
                      </table>
                    </div>

                     <!-- Modal -->
             <!--    <div class="modal fade" id="deleteSectorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <form action="" id="deleteSectorForm" method="POST">
                          @csrf 
                          @method('DELETE')
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Sector Delete</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="text-center">Are you sure to delete this sector?</div>
                                  </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">No, Go Back</button>
                                  <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                  </div>
                              </div>
                      </form>
                  </div>
              </div> -->
                      
                    </div>
                    @else 
                      <h2 class="text-center text-info font-weight-bold m-3">No Data Found</h2>
                    @endif
                    <div class="pagination">
                      {{ $Sectors->links() }}
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->




 @endsection

 @section('js')

   <!--  <script>
     function handleDeleteSector(id){

          var form = document.getElementById('deleteSectorForm')
          form.action = 'MinistrySectors/' + id 
          $('#deleteSectorModal').modal('show')
          //console.log(form)
       }
 </script> -->


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
function deletePost(id){
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
    confirmButton: 'btn btn-success m-2',
    cancelButton: 'btn btn-danger m-2'
    },
    buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    reverseButtons: true
    }).then((result) => {
    if (result.value) {

    event.preventDefault();
    document.getElementById('delete-form-'+id).submit();

    } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
    ) {
    swalWithBootstrapButtons.fire(
    'Cancelled',
    'Your imaginary file is safe :)',
    'error'
    )
    }
    })
} 

</script>

 

      
  
@endsection