@extends('layout.layout')
@include('layout.navbar')

@section('content')
<!-- CONTENT -->
<body style="background-color: #1f1f1f;">
<div class="detail-container" style="background-color: white; width: 80%; padding: 20px; border-radius: 15px;
margin-left:auto; margin-right:auto; margin-top: 48px; display: flex; border: 8px solid #C5FF01">

    <!-- IMAGE -->

    <div class="imageContainer" style="margin-left: 40px;">
        <div class="imageContainer" style="max-width: 400px;">
            <img src="{{asset('storage/Assets/image/short_sleeve/hitam.png')}}" id="preview" class="d-block w-100" alt="thumbnail">
        </div>
    </div>

    <!-- IMAGE -->

    <!-- DETAIL PRODUK -->

    <div class="productDetail">
        <form action="" method="POST" enctype="multipart/form-data">
            
            <h2 style="color: #1f1f1f; margin-left: 40px; margin-top: 16px;"><b>Yuk Kustom Baju Kamu!</b></h2>
            <div class="detail" style="margin-left: 40px; margin-top: 32px;">
                @csrf
                <label for="exampleInputEmail1" class="form-label"><b>Nama Produk</b></label>
                <input type="text" class="form-control mb-3" name="name" aria-describedby="emailHelp">

                <label for="exampleInputEmail1" class="form-label"><b>Tambahkan Desain</b></label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02" name="img">Upload</label>
                </div>
    
                <label for="exampleInputEmail1" class="form-label"><b>Pilih Panjang Lengan</b></label>
                <div class="dropdown mb-3">
                    <select required class="form-select" name="lengan" style="width:100%">
                        <option disabled selected value="">Pilih Panjang Lengan</option>
                        <option class="dropdown-item" value="">Panjang</option>
                        <option class="dropdown-item" value="">Pendek</option>
                    </select>
                </div>
    
                <label for="exampleInputEmail1" class="form-label"><b>Tentukan Ukuran Kamu!</b></label>
                <br>
    
                <div class="size" style="display: flex; gap: 24px;">
                    <div class="berat-badan">
                    <label for="exampleInputEmail1" class="form-label">Berat Badan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="berat" id="weight" onchange="changeSize(getSize(Number(document.getElementById('weight').value),Number(document.getElementById('height').value)))">
                            <span class="input-group-text">Kg</span>
                        </div>
                    </div>
    
                    <div class="tinggi-badan">
                    <label for="exampleInputEmail1" class="form-label">Tinggi Badan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="tinggi" id="height" onchange="changeSize(getSize(Number(document.getElementById('weight').value),Number(document.getElementById('height').value)))">
                            <span class="input-group-text">Cm</span>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row fw-bold">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Ukuran Rekomendasi : </label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="size" value="">
                    </div>
                </div>
            </div>
            <div class="harga-n-button" style="display: flex; align-items: center;">
                <div class="harga">
                    <h5 style="color: #1f1f1f; margin-left: 40px;">Harga</h5>
                    <h2 id="harga" style="color: #1f1f1f; margin-left: 40px; font-weight: bold;">Rp. 149.000</h2>
                </div>
    
                <div class="button" style="margin-left: 98px;">
                    <input type="submit" class="btn btn-primary" style="background-color: #c5ff01; border-color: #c5ff01;
                    color: #1f1f1f; font-weight: bold; width: 300px;" value="Pesan">
                </div>
            </div>
        </form>
    </div>
    <!-- DETAIL PRODUK -->
</div>
<script>
    function getSize(w,h) {
        let size = ""
        if (w <= 65) {
            if (h <= 165) {
                size="S"
            }else if(h <= 175){
                size="M"
            }else if(h <= 185){
                size="L"
            }else{
                size="XL"
            }
        }else if(w <= 75){
            if (h <= 165) {
                size="M"
            }else if(h <= 185){
                size="L"
            }else{
                size="XL"
            }
        }else if(w <= 85){
            if (h <= 165) {
                size="L"
            }else{
                size="XL"
            }
        }else if(w <= 92){
            size = "XL"
        }else{
            size = "XXL"
        }
        return size
    }
    function changeSize(size) {
        document.getElementById('size').value = size
        return
    }
</script>

<!-- CONTENT -->

@include('layout.footer')
</body>
@endsection