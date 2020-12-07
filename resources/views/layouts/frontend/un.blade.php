@extends('layouts.frontend.app')

@section('title', 'Bangladesh')

@section('content')


    <style>
        .carousel-item {
            height: 300px;
        }

        .carousel-item img {
            height: 400px;
        }

    </style>

    {{-- --------------------1st------------------------ --}}
    <section>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('public/img/Main_Menu1.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('public/img/ISSUE_MAIN.png') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('public/img/report.png') }}" alt="Third slide">
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

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <img class="card-img-bottom" src="{{ asset('public/img/ISSUE_MAIN.png') }}" alt="Card image cap">
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="card bg-light mb-3 " style="max-width: 18rem; float:left; margin-top:50px;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <img class="card-img-bottom" src="{{ asset('public/img/ISSUE_MAIN.png') }}"
                                alt="Card image cap">

                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>

                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;float:left; margin-top:50px;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <img class="card-img-bottom" src="{{ asset('public/img/ISSUE_MAIN.png') }}"
                                alt="Card image cap">

                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>


    {{-- -----------------3rd------------- --}}
    <section>

        <div class="container-fluid" style="margin-top:100px;">

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1>Sectors</h1>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <table class="table">

                                <tr>
                                    <th>Education:
                                        <img class="img-fluid" src="{{ asset('public/img/ISSUE_MAIN.png') }}" alt="image"
                                            style="width:170px;">
                                    </th>
                                    <td>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type and scrambled it to make a type specimen book.</td>
                                </tr>
                                <tr>
                                    <th>Education:
                                        <img class="img-fluid" src="{{ asset('public/img/ISSUE_MAIN.png') }}" alt="image"
                                            style="width:170px;">

                                    </th>
                                    <td>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type and scrambled it to make a type specimen book.</td>
                                </tr>
                                <tr>
                                    <th>Education:
                                        <img class="img-fluid" src="{{ asset('public/img/ISSUE_MAIN.png') }}" alt="image"
                                            style="width:170px;">

                                    </th>
                                    <td>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type and scrambled it to make a type specimen book.</td>
                                </tr>
                                <tr>
                                    <th>Education:
                                        <img class="img-fluid" src="{{ asset('public/img/ISSUE_MAIN.png') }}" alt="image"
                                            style="width:170px;">

                                    </th>
                                    <td>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type and scrambled it to make a type specimen book.</td>
                                </tr>
                                <tr>
                                    <th>Education:
                                        <img class="img-fluid" src="{{ asset('public/img/ISSUE_MAIN.png') }}" alt="image"
                                            style="width:170px;">

                                    </th>
                                    <td>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type and scrambled it to make a type specimen book.</td>
                                </tr>
                            </table>
                        </div>

                    </div>



                </div>


            </div>
        </div>


    </section>



    {{-- ---------------------4th----------------- --}}

    <section>
        <div class="container my-5" style="">

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1>Ministers</h1>
                    </div>

                    <div class="card-group">
                        <div class="card m-2">
                            <img class="card-img-top" src="{{ asset('public/img/ISSUE_MAIN.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card m-2">
                            <img class="card-img-top" src="{{ asset('public/img/ISSUE_MAIN.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card m-2">
                            <img class="card-img-top" src="{{ asset('public/img/ISSUE_MAIN.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This card has even longer content than the first to show that equal
                                    height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>


@endsection
