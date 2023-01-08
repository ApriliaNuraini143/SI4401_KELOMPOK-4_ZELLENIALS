@extends('layout.layout')
@include('layout.sidebar')

@section('content')
    <body style="background-color: #1f1f1f; display: flex;"> 

    <!-- CONTENT -->
    <div class="contentSection" style="height: 100vh;">
        <div class="title">
            <h1 style="color: white; margin: 56px 40px;">Tambahkan Produk</h1>
        </div>

        <div class="content" style="display: flex;">

            <!-- IMAGE CAROUSEL -->
    
            <div class="imageContainer" style="margin-left: 40px;">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="max-width: 300px; border-radius: 16px">
                        <div class="carousel-item active">
                            <img id="img-preview" src="{{asset('storage/Assets/image/short_sleeve/hitam.png')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- IMAGE CAROUSEL -->

            <!-- FORM PRODUK -->
    
            <div class="form" style="margin-left: 40px; color: white; width: 860px;">
                <form action="{{route('addProduk')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="form-control" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="namakatalog" name="nama" placeholder="Apa nama produknya?">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" id="deskripsikatalog" rows="3" name="deskripsi" placeholder="Tuliskan deskripsi produknya."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="form-control" class="form-label">Harga Produk</label>
                        <input type="number" class="form-control" id="namakatalog" name="harga" placeholder="150000">
                    </div>

                    <div class="mb-3">
                        <label for="form-control" class="form-label">Jenis Kain</label>
                        <input type="text" class="form-control" id="jenisKain" name="kain" placeholder="New States Apparel 24s">
                    </div>

                    <div class="mb-3">
                        <label for="form-control" class="form-label">Jenis Sablon</label>
                        <input type="text" class="form-control" id="jenisSablon" name="sablon" placeholder="Direct Transfer Film (DTF)">
                    </div>

                    <div class="inputImg">
                        <p style="margin-bottom: 0.5rem;">Tambahkan Gambar</p>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="img" id="picProduk">
                            <label class="input-group-text" for="inputGroupFile02">Upload (Max 2 MB)</label>
                        </div>
                    </div>

                    <div class="inputSize">
                        <p style="margin-bottom: 0.5rem;">Ukuran yang Tersedia</p>
                        
                        <div class="checkBox" style="display: flex;">
                            <div class="mb-3 form-check">
                                <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">XS</label>
                                <input type="checkbox" name="sizeXS" class="form-check-input" id="exampleCheck1">
                            </div>

                            <div class="mb-3 form-check">
                                <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">S</label>
                                <input type="checkbox" name="sizeS" class="form-check-input" id="exampleCheck1">
                            </div>

                            <div class="mb-3 form-check">
                                <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">M</label>
                                <input type="checkbox" name="sizeM" class="form-check-input" id="exampleCheck1">
                            </div>

                            <div class="mb-3 form-check">
                                <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">L</label>
                                <input type="checkbox" name="sizeL" class="form-check-input" id="exampleCheck1">
                            </div>

                            <div class="mb-3 form-check">
                                <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">XL</label>
                                <input type="checkbox" name="sizeXL" class="form-check-input" id="exampleCheck1">
                            </div>

                            <div class="mb-3 form-check">
                                <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">XXL</label>
                                <input type="checkbox" name="sizeXXL" class="form-check-input" id="exampleCheck1">
                            </div>
                        </div>

                    </div>
                        <input type="submit" class="btn btn-primary" style="margin-top: 32px; background-color: #c5ff01; border-color: #c5ff01; color: #1f1f1f; font-weight: bold;" value="Tambahkan">
                </form>    
            </div>

            <!-- FORM PRODUK -->

        </div>
    </div>
</body>
<script>

    $('#picProduk').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("img-preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
</script>

    <!-- CONTENT -->
@endsection