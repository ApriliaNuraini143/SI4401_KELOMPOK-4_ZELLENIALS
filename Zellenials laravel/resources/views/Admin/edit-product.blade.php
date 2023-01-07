@extends('layout.layout')
@include('layout.sidebar')

@section('content')
    <body style="background-color: #1f1f1f; display: flex;">

        <!-- CONTENT -->

        <div class="contentSection" style="height: 100vh;">
            <div class="title">
                <h1 style="color: white; margin: 56px 40px;">Sunting Produk</h1>
            </div>

            <div class="imageContainer" style="margin-left: 40px;">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="max-width: 300px; border-radius: 16px">
                            <div class="carousel-item active">
                                <img id="img-preview" src="{{asset('storage/uploaded/produk/'.$produk->foto_produk)}}" class="d-block w-100" alt="...">
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
                    <form action="{{route('updateProduk',$produk->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="form-control" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namakatalog" name="nama" value="{{$produk->nama_produk}}">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsikatalog" name="deskripsi" rows="3">{{$produk->deskripsi}}</textarea>
                        </div>
    
                        <div class="mb-3">
                            <label for="form-control" class="form-label">Harga Produk</label>
                            <input type="number" class="form-control" id="namakatalog" name="harga" value="{{$produk->harga}}">
                        </div>

                        <div class="mb-3">
                            <label for="form-control" class="form-label">Jenis Kain</label>
                            <input type="text" class="form-control" id="jenisKain" name="kain" value="{{$produk->kain}}">
                        </div>

                        <div class="mb-3">
                            <label for="form-control" class="form-label">Jenis Sablon</label>
                            <input type="text" class="form-control" id="jenisSablon" name="sablon" value="{{$produk->sablon}}">
                        </div>
    
                        <div class="inputImg">
                            <p style="margin-bottom: 0.5rem;">Tambahkan Gambar</p>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="img" id="picProduk">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
    
                        <div class="inputSize">
                            <p style="margin-bottom: 0.5rem;">Ukuran yang Tersedia</p>
                            
                            <div class="checkBox" style="display: flex;">
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">XS</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sizeXS" @checked(json_decode($produk->size,true)['XS']=="on")>
                                </div>

                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">S</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sizeS" @checked(json_decode($produk->size,true)['S']=="on")>
                                </div>
    
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">M</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sizeM" @checked(json_decode($produk->size,true)['M']=="on")>
                                </div>
    
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">L</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sizeL" @checked(json_decode($produk->size,true)['L']=="on")>
                                </div>
    
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">XL</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sizeXL" @checked(json_decode($produk->size,true)['XL']=="on")>
                                </div>
    
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">XXL</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="sizeXXL" @checked(json_decode($produk->size,true)['XXL']=="on")>
                                </div>
                            </div>
    
                        </div>
                            <input type="submit" class="btn btn-primary" style="margin-top: 32px; background-color: #c5ff01; border-color: #c5ff01; color: #1f1f1f; font-weight: bold;" value="Update">
                            <a type="submit" class="btn btn-primary" style="margin-left: 8px; margin-top: 32px; background-color: Red; border-color: Red; color: White; font-weight: bold;" href="{{route('deleteProduk',$produk->id)}}">Hapus</a>
                    </form>    
                </div>

                <!-- FORM PRODUK -->
            </div>
        </div>

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

</body>
@endsection