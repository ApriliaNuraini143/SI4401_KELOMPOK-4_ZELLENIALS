@extends('layout.layout')
@include('layout.navbar')

@section('content')
<body style="background-color: #1f1f1f;">
    <div class="op-title" style="text-align: center; color:white; margin-top: 50px;">
      <h1 style="font-size: 48px;"><b>Keranjang Belanja Kamu!</b></h1>
    </div>

    <div class="detail-container" style="background-color: white; width:90%; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 40px;">
    @if($cartWithNames!=[])
      <table class="table">
          <thead style="background-color: #C5FF01;" align="center">
              <tr sty>
              <th scope="col">Nama Produk</th>
              <th scope="col">Ukuran</th>
              <th scope="col">Kuantitas</th>
              <th scope="col">Harga</th>
              <th scope="col">Aksi</th>
              </tr>
          </thead>
          <tbody align="center" style="align-items: center;">
            @foreach ($cartWithNames['cartItem'] as $id => $c)
              @foreach ($c as $cartItem)
                <tr>
                <td>{{$cartItem['name']}}</td>
                <td>{{$cartItem['size']}}</td>
                <td>{{$cartItem['quantity']}}</td>
                <td>Rp {{number_format($cartItem['harga'])}}</td>
                <td><button type="button" class="btn" style="--bs-btn-border-color: #DC3545;
                    --bs-btn-bg: #DC3545;
                    --bs-btn-hover-bg: #DC3545;
                    --bs-btn-color: #ffffff;
                    --bs-btn-hover-border-color: #DC3545;
                    --bs-btn-border-radius: 0px;"
                    onclick="if (confirm('Yakin ingin menghapus produk tersebut dari cart ?')) {window.location.href = '{{route('deleteCart',['idProduk' => $id, 'size' => $cartItem['size']])}}';}">
                    Hapus</button></td>
                </tr>
                
              @endforeach
            @endforeach
          </tbody>
      </table>
    @else
      Keranjang Kosong!
    @endif
        
  </div>
  @isset($cartWithNames['cartItem'])

    <div class="total-belanja" style="background-color: white; width:90%; height: 140px ; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 40px; display: flex; align-item: center; justify-items: center; border: 8px solid #C5FF01">
      <div class="notes" style="width: 60%; margin-top: auto; margin-bottom: auto;" align="center">
        <h3 style="font-size: 24px;">Periksa Kembali Pesanan Kamu Sebelum Melanjutkan ✅</h3>
      </div>

      <div class="total" style="background-color: #1f1f1f; color: white; margin-top: auto; margin-bottom: auto; padding: 16px; width: 30%;">
        <h4 style="font-size: 24px; margin-left: 16px;">Total Belanjaan :</h4>
          <h3 style="font-size: 40px; margin-left: 16px;">Rp. {{number_format($cartWithNames['total'])}}</h3>  
        </div>
        
        <div class="checkout-btn" style="background-color: #1f1f1f; color: white; margin-top: auto; margin-bottom: auto; padding: 46px 60px 40.5px 5px; width: 20%;">
      <a href="{{route('checkout')}}" class="btn" style="--bs-btn-border-color: #C5FF01; width: 100%; border-radius: 8px;
                    --bs-btn-bg: #C5FF01;
                    --bs-btn-hover-bg: #C5FF01;
                    --bs-btn-color: #000000;
                    --bs-btn-hover-border-color: #C5FF01;
                    --bs-btn-border-radius: 0px;"><b>Checkout</b></a>
      </div>
      
    </div>
    @endisset

    @include('layout.footer')
</body>
@endsection
