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
        </style>
    </head>




    <div class="panel-body">

        <a href="view.php" class="btn btn-primary">View</a>
        <a href="{{ route('design.adddesign') }}" class="btn btn-primary pull-right">Add Designs</a>


        <form method="post">
            <table class="table">


                <thead>
                    <th>S.No</th>
                    <th>Category_Name</th>
                    <th>Design_Name</th>
                    <th>Price</th>
                    <th>Width</th>
                    <th>Height</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>


                </thead>


                <tbody>
                    @foreach ($category as $categories)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $categories->category->name }}</td>
                        <td>{{ $categories->design_name }}</td>
                        <td>{{ $categories->price }}</td>
                        <td>{{ $categories->height }}</td>
                        <td>{{ $categories->width }}</td>

                        <td>
                            @foreach ($categories->media as $image)
                                <img src="{{ asset('/storage/images/' . $image->image) }}" width="250px" height="150px" />
                            @endforeach
                        </td>

                        <td>{{ $categories->description }}</td>
                        <td><a href="{{ route('design.editdesign', $categories->slug) }}" class="btn btn-primary">
                                <i class="fa fa-edit fa-2x"></i>
                            </a> &nbsp; &nbsp; &nbsp;
                            <a href="" class="btn btn-success"><i class="fa fa-upload fa-2x"></i>
                            </a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_{{$categories->id}}">
                                <i class="fa fa-trash fa-2x"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal_{{$categories->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST"
                                            action="{{ route('design.destroydesign', $categories->slug) }}">
                                            @csrf
                                            @method('delete')
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

                            </tr>
                    @endforeach

                </tbody>

        </form>

        </table>



    </div>
@endsection
