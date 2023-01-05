@extends('layout.layout')
@include('layout.navbar')

@section('content')

<!-- CONTENT -->

<div class="container" style="margin-top: 150px;">
  <h1 align="center"></h1>
  <div class="row">
    <div class="col-6">
      <a class="navbar-brand" >
        <img
          src="{{asset('img/favicon.ico')}}"
          alt=""
          width="400"
          height="400"
          class="d-inline-block align-text-top"
          style="object-fit: cover; border-radius: 30%; margin-left: 50px;"
        />
      </a>
      
    </div>

    <div class="col-6 text-light" style="margin-top: 70px;">
      <h1><b>Tentang Kami ~</b></h1>
      <p>Sebuah brand fashion lokal yang didirikan oleh tiga pemuda yang ingin menghadirkan kaos yang berkualitas
        dengan harga yang terjangkau.</p>

      <p>Tingginya harga kaos namun dengan kualitas yang seadanya menjadi motivasi kami untuk menciptakan kaos
        dengan bahan berkualitas, sablon yang terang serta tahan lama yang juga dilengkapi dengan tema streetwear.</p>

      <p>Dukung kami untuk bisa menjadi lebih baik!<br>
      Masukan dari kalian akan sangat berarti bagi kami!</p>
    </div>
  </div>
</div>