@extends('layouts.master')
@section('content')
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

        .container {
            position: relative;
        }

        .image {
            display: block;
            width: 200px;
            height: 200px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
        }

        .image:hover .overlay {
            opacity: 1;
        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .overlay-icons {
            display: flex;
            align-items: center;
        }

        .overlay-icons i {
            font-size: 24px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 8px;
            margin: 0 4px;
            border-radius: 50%;
            cursor: pointer;
        }

        .fullscreen-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .modal-image {
            display: block;
            max-width: 90%;
            max-height: 90%;
            margin: 0 auto;
            border-radius: 4px;
        }

        .modal-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 16px;
        }

        .modal-navigation i {
            font-size: 24px;
            color: #fff;
            cursor: pointer;
        }

        .modal-close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
        }

        .btn-primary {
            margin-bottom: 10px;
        }

        .icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            z-index: 1;
        }

        .fa-search-plus,
        .fa-trash-o {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 8px;
            margin: 0 4px;
            border-radius: 50%;
        }

        .fa-search-plus:hover,
        .fa-trash-o:hover {
            background-color: rgba(0, 0, 0, 0.9);
        }
    </style>
    <div class="container mt-2">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Upload Design of {{ $design->design_name }}
                </button>

                {{-- <div class="container mt-3">
                    <div class="lightbox">
                        <div class="row">
                            @foreach ($design->media as $index => $image)
                                <div class="col-md-3 mr-4">
                                    <a href="{{ asset('/storage/images/' . $image->image) }}" data-bs-toggle="lightbox"
                                        data-bs-gallery="gallery">
                                        <img src="{{ asset('/storage/images/' . $image->image) }}"
                                            style="height: 150px; object-fit: cover" alt="">
                                    </a>
                                    <div class="overlay">
                                        <div class="overlay-icons">
                                            <i class="fas fa-search" onclick="openLightbox(event, {{ $index }})"></i>
                                            <i class="fas fa-trash" onclick="deleteImage({{ $image->id }})"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}
                <div class="container mt-3">
                    <div class="lightbox">
                      <div class="row">
                        @foreach ($design->media as $index => $image)
                        <div class="col-md-3 mr-4">
                          <a href="{{ asset('/storage/images/' . $image->image) }}" data-bs-toggle="modal"
                            data-bs-target="#fullscreenModal">
                            <img src="{{ asset('/storage/images/' . $image->image) }}" style="height: 150px; object-fit: cover"
                              alt="">
                          </a>
                          <div class="overlay">
                            <div class="overlay-icons">
                              <i class="fas fa-search" onclick="openFullscreenModal({{ $index }})"></i>
                              <i class="fas fa-trash" onclick="deleteImage({{ $image->id }})"></i>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="fullscreen-modal" id="fullscreenModal">
        <div class="modal-content">
          <i class="fas fa-chevron-left modal-navigation" onclick="changeFullscreenModalImage(-1)"></i>
          <i class="fas fa-chevron-right modal-navigation" onclick="changeFullscreenModalImage(1)"></i>
          <i class="fas fa-times modal-close" onclick="closeFullscreenModal()"></i>
          <img class="modal-image" src="" alt="Full Screen Image">
        </div>
      </div>


    {{-- <div class="fullscreen-modal" id="fullscreenModal">
        <div class="modal-content">
            <i class="fas fa-chevron-left modal-navigation" onclick="changeFullscreenModalImage(-1)"></i>
            <i class="fas fa-chevron-right modal-navigation" onclick="changeFullscreenModalImage(1)"></i>
            <i class="fas fa-times modal-close" onclick="closeFullscreenModal()"></i>
            <img class="modal-image" src="" alt="Full Screen Image">
        </div>
    </div> --}}
    <!-- Button trigger modal -->




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('design.uploadimage', $design->slug) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body text-center">
                        <div class="form-group">
                            <label for="name">Image</label>
                            <input type="file" class="form-control" id="images" name="image[]" multiple>
                            <ul id="image-list"></ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($design->media as $index => $image)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img src="{{ asset('/storage/images/' . $image->image) }}"
                                        style="max-height: 600px; object-fit: contain;" alt="">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


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

        function openFullscreenModal(index) {
            const modal = document.getElementById("fullscreenModal");
            const modalImage = modal.querySelector(".modal-image");
            const images = {!! json_encode($design->media->pluck('image')->toArray()) !!};

            modalImage.src = "{{ asset('/storage/images/') }}/" + images[index];
            modal.style.display = "block";
        }

        function changeFullscreenModalImage(offset) {
            const modal = document.getElementById("fullscreenModal");
            const modalImage = modal.querySelector(".modal-image");
            const images = {!! json_encode($design->media->pluck('image')->toArray()) !!};
            const currentImage = modalImage.src.substring(modalImage.src.lastIndexOf("/") + 1);
            const currentIndex = images.indexOf(currentImage);

            let newIndex = currentIndex + offset;
            if (newIndex >= images.length) {
                newIndex = 0;
            } else if (newIndex < 0) {
                newIndex = images.length - 1;
            }

            modalImage.src = "{{ asset('/storage/images/') }}/" + images[newIndex];
        }

        function closeFullscreenModal() {
            const modal = document.getElementById("fullscreenModal");
            modal.style.display = "none";
        }
    </script>
@endsection
