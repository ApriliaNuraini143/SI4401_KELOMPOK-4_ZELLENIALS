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
                        <th scope="col">Status</th>
                        <th scope="col">Bukti Pembayaran</th>
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
                            <td> <input type="text" readonly class="form-control-plaintext text-center" name="status-text" id="status-text" value="{{$pesanan->pesanan->status}}"> </td>
                            <td><a href="/download/bukti/{{$pesanan->pesanan->foto_pembayaran}}" class="btn btn-primary"
                            style="margin-top: 0px; color: white; font-weight: bold;">Download Bukti</a></td>
                            
                            <td><a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{$pesanan->pesanan->id}}"
                            style="margin-top: 0px; background-color: blue;
                            border-color: blue; color: white; font-weight: 400;">Edit</a>

                            <button type="submit" class="btn btn-primary"
                            style="margin-top: 0px; background-color: red;"
                            onclick="if (confirm('Yakin ingin menghapus order tersebut ?')) {window.location.href = '{{route('deletePesanan',$pesanan->pesanan->id)}}';}">X</button></td>
                            </tr>

                            <div class="modal fade" id="edit-{{$pesanan->pesanan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="form">
                                        <form action="{{route('updateStatus', $pesanan->pesanan->id)}}" method="GET">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <select class="form-select" aria-label="selectStatus" id="valueStatus" name="status">
                                                            <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                                            <option value="Packaging">Packaging</option>
                                                            <option value="Delivered">Delivered</option>
                                                            <option value="Completed">Completed</option>
                                                            <option value="Retur">Retur</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button href="{{route('updateStatus', $pesanan->pesanan->id)}}" type="submit" class="btn btn-primary" id="saveButton" data-bs-dismiss="modal">Save changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function getStatus(s) {
        let size = ""
        if (s == "1") {
            status == "Packaging"
        }else if(s == "2"){
            if (h <= 165) {
                size="M"
            }else if(h <= 185){
                size="L"
            }else{
                size="XL"
            }
        }else if(s == "3"){
            if (h <= 165) {
                size="L"
            }else{
                size="XL"
            }
        }else if(s == "4"){
            size = "XL"
        }else{
            status = "Pending"
        }
        return size
    }

        function changeStatus(s) {
            document.getElementById('status-text').value = status
            return
        }
    </script>
    <!-- CONTENT -->

    <!-- Modal -->
</body>

@endsection