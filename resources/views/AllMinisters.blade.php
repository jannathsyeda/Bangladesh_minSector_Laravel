@extends('layouts.frontend.app')

@section('title', 'minister Details')

@section('content')



<section style="padding-bottom:100px;">
    <h1 style="text-align: center;">Ministers</h1>
       <div class="container">
    <div class="row">

        @foreach ($AllMinisters as $b)
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
    
    <div class="p-4 mt-4" style="margin-right: 800px;">
        <a href="{{ route('home') }}"
        class="btn btn-danger">Back</a>

    </div>
    <div class="ml-6 mt-5">
    {{ $AllMinisters->links() }}
    </div>
</div>

   </section>


    @endsection
