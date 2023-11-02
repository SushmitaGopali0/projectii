@extends('layouts.master')
@section('content')
    <style>
        * {
            padding: 0;
            margin: 0
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            background-color: #0605F9
        }

        .profile {
            position: relative;
            text-align: center;
            margin-top: 60px
        }

        .profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 2px solid red;
            cursor: pointer
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            transition: all 2s;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block
        }

        .dropdown-content a:hover {
            background-color: #ddd
        }

        .dropdown:hover .dropdown-content {
            display: block
        }

        .profile ul {
            background-color: #fff;
            width: 200px;
            height: 190px;
            border-radius: 10px;
            right: 25px;
            top: 7px;
            position: absolute;
            padding: 8px;
            transition: all 0.5s;
            z-index: 1
        }

        .profile ul::before {
            content: '';
            position: absolute;
            background-color: #fff;
            height: 10px;
            width: 10px;
            top: -5px;
            transform: rotate(45deg)
        }

        .profile ul li {
            list-style: none;
            text-align: left;
            font-size: 15px;
            padding: 10px;
            display: flex;
            align-items: center;
            transition: all 0.5s;
            cursor: pointer;
            border-radius: 4px
        }

        .profile ul li:hover {
            background-color: #eee
        }

        .profile ul li i {
            margin-right: 7px
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Dashboard</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>
                    </a>
                    {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul> --}}
                </li>
            </ul>
        </div>
    </nav>
    @can('Admin')
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">{{ $users->count() }}</h3>
                        <p class="fa fa-user">Users</p>
                    </div>
                    <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">{{ $designers->count() }}</h3>
                        <p class="fa fa-home">Designers</p>
                    </div>
                    <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>


        </div>

<div class="card shadow">
    <div class="card-header">
        <h3 style="text-align: center">Design Wise visitor count</h3>
    </div>
    <div class="card-body">
        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Design Name</th>
                    <th>Visitors Count</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trending as $key => $value)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$value->design_name}}</td>
                    <td>{{$value->count}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endcan
        <div class="row my-5">
            <h3 class="fs-4 mb-3">Recent Design Customization request</h3>
            <div class="col">
                <table class="table bg-white rounded shadow-sm  table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col">Designed By</th>
                            <th scope="col">Height</th>
                            <th scope="col">Width</th>
                            <th scope="col">Description</th>
                            @can('Designer')
                                <th scope="col">Action</th>
                            @endcan

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customizes as $key => $customize)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $customize->designer->name }}</td>
                                <td>{{ $customize->height }}</td>
                                <td>{{ $customize->width }}</td>
                                <td>{{ $customize->description }}</td>
                                @can('Designer')
                                    @if ($customize->status == 'none' || $customize->status == 'pending')
                                        <td>
                                            <form action="{{ route('admin.designapproved', $customize->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="approved">

                                                <button class="btn btn-success">Approved</button>
                                            </form>
                                            <form action="{{ route('admin.designdecline', $customize->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="decline">
                                                <button class="btn btn-danger">Decline</button>

                                            </form>
                                        </td>
                                    @else
                                        <td>
                                            <span class="batch">{{ $customize->status }}</span>
                                        </td>
                                    @endif
                                @endcan
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
