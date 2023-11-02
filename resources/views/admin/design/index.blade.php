@extends('layouts.master')
@section('content')

    <head>
        <style>
            .panel-body {
                width: 100%;
                padding-left: 50px;
                padding-right: 50px;
                padding-top: 50px;
            }

            /* detail designer */
            .containers {
                display: flex;
                justify-content: space-between;
                max-width: 2000px;
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

            /* end detail designer */
        </style>
    </head>




    <div class="panel-body">
        {{-- <div class="details">
            <div class="photo-album" style="">
                <img src="/frontend/images/1.jpeg" alt="" height="150px" width="170px" style="border-radius: ;">
                <div class="designer-info">
                    <span class="designer-name">{{ $design->designer->name }}</span><br>
                    <span class="designer-address">{{ $design->designer->address }}</span>
                </div>
            </div>
        </div> --}}

        @can('Designer')
            <a href="{{ route('design.adddesign') }}" class="btn btn-primary pull-right">Add Designs</a>
        @endcan
        <table class="table">


            <thead>
                <th>S.No</th>
                <th>Category_Name</th>
                <th>Design_Name</th>
                <th>Price</th>
                <th>Width</th>
                <th>Height</th>
                <th>Color</th>
                <th>Image</th>
                <th>Description</th>
                @can('Designer')
                    <th>Action</th>
                @endcan

            </thead>


            <tbody>

                @foreach ($category as $categories)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $categories->category->name }}</td>
                    <td>{{ $categories->design_name }}</td>
                    <td>{{ $categories->price }}</td>
                    <td>{{ $categories->height }}</td>
                    <td>{{ $categories->width }}</td>
                    <td>{{ $categories->color }}</td>

                    <td>
                        @foreach ($categories->media as $image)
                            <img src="{{ asset('/storage/images/' . $image->image) }}" width="250px" height="150px" />
                        @endforeach
                    </td>

                    <td>{{ $categories->description }}</td>
                    @can('Designer')
                        <td><a href="{{ route('design.editdesign', $categories->slug) }}" class="btn btn-primary">
                                <i class="fa fa-edit fa-2x"></i>
                            </a> &nbsp; &nbsp; &nbsp;
                            <a href="{{ route('design.uploaddesign', $categories->slug) }}" class="btn btn-success"><i
                                    class="fa fa-upload fa-2x"></i>
                            </a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#exampleModal_{{ $categories->id }}">
                                <i class="fa fa-trash fa-2x"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal_{{ $categories->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('design.destroydesign', $categories->slug) }}">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body text-center">
                                                Are you sure want to delete this design ?<br>
                                                <small>After delete you will not be able to recover/recycle it !</small>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Ok</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    @endcan
                    </tr>
                @endforeach

            </tbody>

            </form>

        </table>



    </div>
@endsection
