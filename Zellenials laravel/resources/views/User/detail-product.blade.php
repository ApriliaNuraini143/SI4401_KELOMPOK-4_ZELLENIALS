@extends('layout.layout')
@include('layout.navbar')

@section('content')
    <!-- CONTENT -->
<body style="background-color: #1f1f1f;">
    <div class="detail-container" style="background-color: white; width: 80%; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 40px; display: flex; border: 8px solid #C5FF01">

        <!-- IMAGE CAROUSEL -->

        <div class="imageContainer" style="margin-left: 40px;">
            <div class="imageContainer">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner" style="max-width: 300px; border-radius: 16px">
                        <div class="carousel-item active">
                            <img src="{{asset('storage/uploaded/produk/'.$produk->foto_produk)}}" class="d-block w-100" alt="...">
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
        </div>

        <!-- IMAGE CAROUSEL -->

        <!-- DETAIL PRODUK -->

        <div class="productDetail">
            <form action="{{route('addCart',$produk->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 style="color: #1f1f1f; margin-left: 40px; margin-top: 16px;">{{$produk->nama_produk}}</h2>

            <div class="detail" style="margin-left: 40px; margin-top: 32px;">
                <h5>Deskripsi Produk</h5>
                <p>{{$produk->deskripsi}}</p>

                <h5>Jenis Kain</h5>
                <p>{{$produk->kain}}</p>

                <h5>Jenis Sablon</h5>
                <p>{{$produk->sablon}}</p>

                <!-- RADIO BUTTON -->

                <h5>Ukuran yang Tersedia</h5>
                <div class="radioButton" style="display:flex; gap: 52px;">
                    @if (json_decode($produk->size,true)['XS']=="on")
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name='size' value="XS" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            XS
                            </label>
                        </div>
                    @endif
                    
                    @if (json_decode($produk->size,true)['S']=="on")
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name='size' value="S" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            S
                            </label>
                        </div>
                    @endif
                    @if (json_decode($produk->size,true)['M']=="on")
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name='size' value="M" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            M
                            </label>
                        </div>
                    @endif
                    @if (json_decode($produk->size,true)['L']=="on")
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name='size' value="L" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            L
                            </label>
                        </div>
                    @endif
                    @if (json_decode($produk->size,true)['XL']=="on")
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name='size' value="XL" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            XL
                            </label>
                        </div>
                    @endif
                    @if (json_decode($produk->size,true)['XXL']=="on")
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name='size' value="XXL" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            XXL
                            </label>
                        </div>
                    @endif
                </div>

                <!-- RADIO BUTTON -->

            </div>

            <h5 style="color: #1f1f1f; margin-left: 40px; margin-top: 32px;">Harga</h5>
            <h2 style="color: #1f1f1f; margin-left: 40px; font-weight: bold;">Rp. {{number_format($produk->harga)}}</h2>
            <input type="hidden" name="harga" value="{{$produk->harga}}">
            <button type="submit" class="btn btn-primary" style="background-color: #c5ff01; border-color: #c5ff01; color: #1f1f1f; font-weight: bold; margin-left: 40px; margin-top: 32px; margin-bottom: 16px;">Beli Sekarang</button>
            </form>
        </div>

        <!-- DETAIL PRODUK -->
    </div>

    <!-- CONTENT -->
    @include('layout.footer')
</body>
@endsection
