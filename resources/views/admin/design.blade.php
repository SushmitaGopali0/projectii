@extends('layouts.master')
@section('content')
    <style>
        body {
            background: #B8860B;
        }

        .card-block {
            padding: 20px;
        }

        .containers {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .details {
            flex: 1;
            padding-right: 20px;
        }

        .details h1 {
            margin-top: 0;
        }

        .details img {
            max-width: 100%;
            height: auto;
        }

        .descriptions {
            flex: 1;
            padding-left: 20px;
        }

        .descriptions h2 {
            margin-top: 0;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="offset-lg-4 col-lg-4 col-sm-6 col-12">
                <div class="card">

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="https://dummyimage.com/350x180/000/fff.png">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="https://dummyimage.com/350x180/000/fff.png">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="https://dummyimage.com/350x180/000/fff.png">
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
                    <div class="card-block">
                        <div class="containers">
                            <div class="details">
                                <div class="photo-album" style="">
                                    <img src="/frontend/images/1.jpeg" alt="" height="180px" width="140px"
                                        style="border-radius: 30%;">
                                    <div class="designer-info">
                                        {{-- <span class="designer-name">{{ $designs->designer->name }}</span><br> --}}
                                        <span class="designer-address">chfhgvh</span>
                                    </div>
                                </div>
                            </div>
                            @foreach($designs as $design)
                            <div class="descriptions">
                                <h4>Design details</h4>
                                {{-- <span class="design-name">Design Category: {{ $category->name }}</span><br> --}}
                                <span class="design-name">Design Name: {{ $design->design_name }}</span><br>
                                <span class="price">Price: Rs {{ $design->price }}</span><br>
                                <span class="height">Height: {{ $design->height }}</span><br>
                                <span class="width">Width: {{ $design->width }}</span><br>
                                <span class="description">Description: {{ $design->description }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
