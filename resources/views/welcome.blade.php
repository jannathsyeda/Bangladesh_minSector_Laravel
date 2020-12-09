@extends('layouts.frontend.app')

@section('title', 'Bangladesh')

@section('content')


    <style>
        .carousel-item {
            height: 300px;

        }

        /* .carousel-item img {
            height: 400px;

        } */

        

    </style>

    {{-- --------------------1st------------------------ --}}
    <section>
        @php

        $sectorList=DB::table('ministry_sectors')->get();

        $sectors=DB::table('ministry_sectors')->first();
        $sector_second=DB::table('ministry_sectors')->skip(1)->first();
        $sector_third=DB::table('ministry_sectors')->skip(2)->first();
        $posts=DB::table('Ministers')->take(4)->get();
        $priminister=DB::table('Ministers')->where('status',1)->first();

        @endphp
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('storage/category/slider/' . $sectors->image) }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block" style="color:black;">
                        <strong>
                            <h1>Banglades Govt.</h1>
                        </strong>
                        <p>Bangladesh all sector details and all sector details</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('storage/category/slider/' . $sector_second->image) }}"
                        alt="Second slide">
                    <div class="carousel-caption d-none d-md-block" style="color:black;">
                        <strong>
                            <h1>Banglades Govt.</h1>
                        </strong>
                        <p>Bangladesh all sector details and all sector details</p>
                    </div>
                </div>
                <div class="carousel-item">

                    <img class="d-block w-100" src="{{ asset('storage/category/slider/' . $sector_third->image) }}"
                        alt="Third slide">
                    <div class="carousel-caption d-none d-md-block" style="color:black;">
                        <strong>
                            <h1>Banglades Govt.</h1>
                        </strong>
                        <p>Bangladesh all sector details and all sector details</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>





    </section>

    {{-- --------------2nd----------------------- --}}

    <section style="margin-top:30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div class="list-group my-4 ">

                        <h1 class="list-group-item list-group-item-action">All Sectors</h1>
                        @foreach ($sectorList as $item)
                            <a href="{{ route('Sectordetail', $item->id) }}"
                                class="list-group-item list-group-item-action">{{ $item->sector }}</a>

                        @endforeach

                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card mb-3 my-3 bg-dark text-white">
                        <img class="card-img-top" src="{{ asset('storage/ministers/' . $priminister->image) }}"
                            alt="Card image cap" style="height:250px;">
                        <div class="card-body">
                            <h5 class="card-title">Bangladesh Prime Minister</h5>
                            <p class="card-text">{!! str_limit($priminister->name) !!}</p>
                                <a href="{{ route('Ministerdetail', $priminister->id) }}"
                                    class="btn btn-info">Details</a>                         </div>
                    </div>



                </div>
            </div>
        </div>

    </section>


    {{-- -----------------3rd------------- --}}

    @php

    $sectors=DB::table('ministry_sectors')->take(3)->get();

    @endphp

    <section>

        <div class="container my-5">

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1>Sectors</h1>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                @foreach ($sectors as $row)
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
                                    <a href="{{ route('AllSector') }}"
                                        class="btn btn-info">SHow All Sectors</a>
                            
                                </div>
                            </div>
                        </div>

                    </div>



                </div>


            </div>
        </div>


    </section>



    {{-- ---------------------4th-------------------}}

   <section style="padding-bottom:100px; margin-top:100px">
    <h1 style="text-align: center;">Ministers</h1>
       <div class="container">
    <div class="row">

        @foreach ($posts as $b)
        <div class="col-lg-3 col-md-4 col-sm-6">
               

            <div class="card text-center" style="background-color:hsla(0, 8%, 90%, 0.8)"; >
                <img class="card-img-top" style="" src="{{ asset('storage/ministers/' . $b->image)   }}" alt="Card image cap">
                <div class="card-body">
                    <a style="text-decoration: none;" target="_blank" href="">{{ $b->name }}
                    </a>  </div>
               
                <div class="row" style="font-size:12px;">
                  <div class="col-md-12  m-1">
                    <a href="{{ route('Ministerdetail', $b->id) }}"
                        class="btn btn-info">Details</a>                  </div> 
                  {{-- <div class="col-md-4">
                    {{-- Viewers: {{ $b->view_count }} --}}
                  {{-- </div>  --}}
                </div>
            </div>
       
        </div>
        @endforeach

     
</div>

<div class="d-flex justify-content-around align-self-end">
    
    <div class="p-4">
        <a href="{{ route('AllMinister') }}"
            class="btn btn-info">SHow All Ministers</a>

    </div>
</div>

   </section>




@endsection
