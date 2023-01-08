@extends('layout.layout')
@include('layout.sidebar')

@section('content')

<!-- CONTENT -->
<body style="background-color: #1f1f1f; display: flex;"> 

    <div class="contentSection" style="height: 100vh;">
        <div class="title">
            <h1 style="color: white; margin: 56px 40px;">DASHBOARD</h1>
        </div>

    <!-- TABEL CUSTOM -->
    <div class="row row-cols-5row-cols-md-3 g-8">
    <div class="col">
        <div class="card h-80" style="max-width: 300px; background-color:blue; color:white; margin: 30px 50px;" >      
        <div class="card-body">
            <h5 class="card-title">Bergabung</h5>
            <br>
            <br>
            <h2 class="card-text" style="text-align:right">{{$data['countUser']-1}}</h2>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-80" style="max-width: 300px; background-color:green; color:white; margin: 30px 30px;">
        <div class="card-body">
            <h5 class="card-title">Penjualan</h5>
            <br>
            <br>
            <h2 class="card-text" style="text-align:right">{{$data['countPesanan']}}</h2>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-80"style="max-width: 300px; background-color:red; color:white; margin: 30px 30px;">
        <div class="card-body">
            <h5 class="card-title">Retur</h5>
            <br>
            <br>
            <h2 class="card-text" style="text-align:right">0</h2>
        </div>
        </div>
    </div>

        <div class="detail-container" style="background-color: white; width: 1200px; padding: 20px; border-radius: 15px;
        margin-left:40px; margin-right:20px; margin-top: 40px;">
            <table class="table">
                <thead style="background-color:white;" align="center">
                    <tr sty>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Gambar Desain</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                        
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach ($data['user'] as $u)
                        @foreach ($u->produks as $pesanan)
                            <tr>
                            <td>{{$u->nama_user}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$pesanan->nama_produk}}</td>
                            <td>Rp {{number_format($pesanan->pesanan->jumlah*$pesanan->harga)}}</td>
                            <td><a href="/download/produk/{{$pesanan->foto_produk}}" class="btn btn-primary"
                            style="margin-top: 0px; color: white; font-weight: bold;">Download Gambar</a></td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"
                            style="margin-top: 0px; background-color: blue;
                            border-color: blue; color: white; font-weight: 400;">Edit</button>
                            <button type="submit" class="btn btn-primary"
                            style="margin-top: 0px; background-color: red;
                            border-color: red; color: white; font-weight: 400;">X</button></td>
                            </tr>

                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered bg-white" role="document">
                                    <div class="modal-body">
                                        <div class="inputImg">
                                            <p style="margin-bottom: 0.5rem;">Edit Status</p>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" id="inputGroupFile02">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Status</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="0" selected>Pending</option>
                                                <option value="1">Packaging</option>
                                                <option value="2">Deliverd</option>
                                                <option value="3">Complated</option>
                                                <option value="4">Retur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- CONTENT -->

    <!-- Modal -->
</body>
@endsection