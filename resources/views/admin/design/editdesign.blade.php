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

                <form method="POST" action="{{ route('design.updatedesign', $category->slug) }}"
                    enctype="multipart/form-data">
                    @csrf
            </div>

            <div class="form-group">
                <label for="name">Category_Name</label>
                <select id="product_category" name="category_id">
                    <option value="">Select category</option>
                    @foreach ($design_category as $categories)
                        {{-- <option value="{{ $categories->id }}">{{ $categories->name }}</option> --}}
                        @if ($categories->id == $category->category_id)
                            <option value="{{ $categories->id }}" selected>{{ $categories->name }}</option>
                        @else
                            <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                        @endif
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="name">Design_Name</label>
                <input type="text" name="design_name" value="{{ $category->design_name }}" class="form-control">

            </div>
            <div class="form-group">
                <label for="name">Price</label>
                <input type="number" name="price" value="{{ $category->price }}" class="form-control">

            </div>

            <div class="form-group">
                <label for="name">Height</label>
                <input type="number" name="height" value="{{ $category->height }}" class="form-control">

            </div>
            <div class="form-group">
                <label for="name">Width</label>
                <input type="number" name="width" value="{{ $category->width }}" class="form-control">

            </div>
            <div class="form-group">
                <label for="name">Color</label>
                <input type="text" name="color" value="{{ $category->color }}" class="form-control">

            </div>
            {{-- < class="form-group">
                <label for="designPattern">Design Pattern</label>
                {{-- <select id="designPattern" name="pattern" class="form-control" value="{{$category->pattern}}">
                    <option value="none">Select Patterns</option>
                    <option value="stripes">Stripes</option>
                    <option value="complexPattern">Complex Pattern</option>
                    <option value="geometricPattern">Geometric Pattern</option>
                    <option value="floralPattern">Floral Pattern</option>
                    <option value="motifPattern">Motif Pattern</option>
                    <option value="animalPattern">Animal Pattern</option>
                </select> --}}





            <div class="form-group">
                <label for="name">Description</label>
                <input type="textarea" name="description" value="{{ $category->description }}" class="form-control">

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
                    img.id = image.name;
                    imageList.appendChild(img);
                });
                reader.readAsDataURL(image);
            }
        });

        const editImage = (imageId) => {
            const img = document.getElementById(imageId);
            img.src = "new-image.jpg";
        };

        const button = document.querySelector("button");
        button.addEventListener("click", () => {
            editImage("image1.jpg");
        });
    </script>
@endsection
