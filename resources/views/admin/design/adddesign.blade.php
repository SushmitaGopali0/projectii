@extends('layouts.master')
@section('content')

    <head>
        <style>
            .panel-body {
                width: 800px;
                padding-left: 450px;
                padding-right: 30px;
                padding-top: 150px;
            }

            #image-list img {
                height: 100px;
                width: 100px;
            }
        </style>
    </head>


    <div class="panel panel-default">






        <div class="panel-body">





            <a href="{{ route('design.index') }}" class="btn btn-primary pull-right">Back</a><br><br>

            <!-- This line of code is for form group -->

            <div class="form-group">

                <form method="POST" action="{{ route('design.storedesign') }}" enctype="multipart/form-data">
                    @csrf
            </div>

            <div class="form-group">
                <label for="name">Category_Name</label>
                <select id="product_category" name="category_id">
                    <option value="">Select category</option>
                    @foreach ($category as $categories)
                        <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="name">Design_Name</label>
                <input type="text" name="design_name" class="form-control">

            </div>
            <div class="form-group">
                <label for="name">Price</label>
                <input type="number" name="price" class="form-control">

            </div>

            <div class="form-group">
                <label for="name">Height</label>
                <input type="number" name="height" class="form-control">

            </div>
            <div class="form-group">
                <label for="name">Width</label>
                <input type="number" name="width" class="form-control">

            </div>


            <div class="form-group">
                <label for="name">Image</label>
                <input type="file" class="form-control" id="images" name="image[]" multiple>
                <ul id="image-list"></ul>
            </div>

            <div class="form-group">
                <label for="name">Description</label>
                <input type="textarea" name="description" class="form-control">

            </div>
            <br><br>

            <input type="submit" class="btn btn-primary">
            </form>


        </div>



    </div>

    <script>
        const imageInput = document.querySelector("#images");
        const imageList = document.querySelector("#image-list");

        imageInput.addEventListener("change", () => {
            const images = imageInput.files;

            for (const image of images) {
                const reader = new FileReader();
                reader.addEventListener("load", () => {
                    const img = document.createElement("img");
                    img.src = reader.result;
                    imageList.appendChild(img);
                });
                reader.readAsDataURL(image);
            }
        });
    </script>
@endsection
