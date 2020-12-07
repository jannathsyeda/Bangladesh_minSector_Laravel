@extends('layouts.frontend.app')

@section('title', 'minister Details')

@section('content')

<section>

    <div class="container mb-5" >

        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1>Sectors</h1>
                </div>


                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            @foreach ($AllSector as $row)
                                <tr>
                                    <th>{{ $row->sector }}:
                                        <img class="img-fluid" src="{{ asset('storage/ministers/' . $row->image) }}"
                                            alt="image" style="width:170px;">
                                    </th>

                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                {!! str_limit( $row->description,1000) !!}

                                            </div>
                                            <div class="mt-auto p-2">
                                                <a href="{{ route('Sectordetail', $row->id) }}"
                                                    class="btn btn-info">Details</a>

                                            </div>
                                        </div>


                                    </td>
                                </tr>
                                
                            @endforeach

                        </table>

                        <div class="d-flex justify-content-around align-self-end">
    
                            <div class="p-4">
                               

                                <a href="{{ route('home') }}"
                                        class="btn btn-info">Back</a>
                                      

                        
                           
                        </div>
                    </div>

                </div>



            </div>

            {{ $AllSector->links() }}
        </div>
       
    </div>

   

</section>
@endsection
