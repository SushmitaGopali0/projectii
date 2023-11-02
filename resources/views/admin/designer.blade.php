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




        <form method="post">
            <table class="table">


                <thead>
                    <th>S.No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>


                </thead>

                <tbody>
                    @foreach($designers as $key=>$designer)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$designer->name}}</td>
                        <td>{{$designer->email}}</td>
                        <td>{{$designer->address}}</td>
                        {{-- <td><a href="{{route('admin.design', $designer->id)}}"><button type="button" class="fa fa-eye"></button></a></td> --}}
                    </tr>
                    @endforeach

                </tbody>

        </form>

        </table>



    </div>
@endsection
