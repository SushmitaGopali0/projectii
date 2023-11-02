@extends('layouts.master')
@section('content')
    <style>
        body {
            background: rgb(99, 39, 120)
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #0e0e0e;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
        .box{
            padding-top: 80px;
            padding-left: 150px;
            padding-right: 150px;
        }
    </style>
    <div class="box">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                            width="150px"
                            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                            class="font-weight-bold">Edogaru</span><span
                            class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                </div>
                <div class="col-md-8 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Username</label><input type="text"
                                    class="form-control" placeholder="Username" value=""></div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                    class="form-control" placeholder="Email" value=""></div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text"
                                    class="form-control" placeholder="enter address " value=""></div>
                            <div class="col-md-12"><label class="labels">Image</label><input type="file"
                                    class="form-control" placeholder="" value=""></div>

                        </div>

                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save
                                Profile</button></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
