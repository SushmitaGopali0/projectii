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
                    {{-- <th>Profile Picture</th> --}}
                    <th>Username</th>
                    <th>Email</th>
                    <th>Address</th>



                </thead>

                <tbody>
@foreach($users as $key=>$user)
<tr>
    <td>{{++$key}}</td>
    {{-- <td>{{$user->name}}</td> --}}
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->address}}</td>
</tr>
@endforeach

                </tbody>

        </form>

        </table>



    </div>
@endsection
