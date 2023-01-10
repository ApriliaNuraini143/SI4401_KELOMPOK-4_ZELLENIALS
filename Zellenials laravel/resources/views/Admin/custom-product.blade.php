@extends('layout.layout')
@include('layout.sidebar')

@section('content')

<body style="background-color: #1f1f1f; display: flex;">
    <!-- CONTENT -->

    <div class="contentSection" style="height: 100vh;">
        <div class="title">
            <h1 style="color: white; margin: 56px 40px;">Custom Product</h1>
        </div>

    <!-- TABEL CUSTOM -->

        <div class="detail-container" style="background-color: white; width: 1200px; padding: 20px; border-radius: 15px;
        margin-left:40px; margin-right:20px; margin-top: 40px;">
            <table class="table">
                <thead style="background-color: #C5FF01;" align="center">
                    <tr sty>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Ukuran</th>
                        <th scope="col">Kuantitas</th>
                        <th scope="col">Status</th>
                        <th scope="col">Gambar Desain</th>
                        <th scope="col">Config</th>
                    </tr>
                </thead>
                <tbody align="center">
                @foreach ($customs as $c)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$c->nama_produk}}</td>
                        <td>{{$c->lengan}}</td>
                        <td>{{$c->size}}</td>
                        <td>1</td>
                        <td style="color: blue;">Menunggu Konfirmasi</td>
                        <td><a type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: green;
                        border-color: green; color: white; font-weight: bold;"
                        href="/download/custom/{{$c->foto_produk}}">Download Gambar</a></td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="margin-top: 0px; background-color: blue;
                        border-color: blue; color: white; font-weight: 400;">Edit</button>
                        <button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: red;
                        border-color: red; color: white; font-weight: 400;"
                        onclick="if (confirm('Yakin ingin menghapus order tersebut ?')) {window.location.href = '{{route('deleteOrder',$c->id)}}';}">X</button></td>
                    </tr>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="form">
                                <form action="" method="GET">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label"></label>
                                            <input class="form-control" type="file" id="formFile">
                                            </div>
                                            <div class="mb-3">
                                                <select class="form-select" aria-label="selectStatus" id="valueStatus" name="status">
                                                    <option value="Konfirmasi">Menunggu Konfirmasi</option>
                                                    <option value="Packaging">Packaging</option>
                                                    <option value="Delivered">Delivered</option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="Retur">Retur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" id="saveButton" data-bs-dismiss="modal">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
