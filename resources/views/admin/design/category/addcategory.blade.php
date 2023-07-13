@extends('layouts.master')

@section('content')
<head>
    <style>
.panel-body{
    width: 800px;
            padding-left: 450px;
            padding-right: 30px;
            padding-top: 150px;
        }
    </style>
</head>

    <div class="panel panel-default">



            <!-- This div is for body -->


            <div class="panel-body">





            <a href="{{route('design.category')}}" class="btn btn-primary pull-right">Back</a><br><br>

            <!-- This line of code is for form group -->



            <form method="post" action="{{route('design.category.storecategory')}}" class="forms" >
                @csrf


            <div class="form-group" >
                <label for="name">Category_Name</label>
                <input type="text" name="category_name" class="form-control">

            </div>

<br><br>

            <input type="submit" class="btn btn-primary" >
</form>


            </div>





    </div>


@endsection
