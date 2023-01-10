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
                        <th scope="col">Nama</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Ukuran</th>
                        <th scope="col">Kuantitas</th>
                        <th scope="col">Status</th>
                        <th scope="col">Gambar Desain</th>
                        <th scope="col">Detail Customer</th>
                        <th scope="col">Config</th>
                    </tr>
                </thead>
                <tbody align="center">
                @foreach ($customs as $c)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$c->user->nama_user}}</th>
                        <td>{{$c->nama_produk}}</td>
                        <td>{{$c->lengan}}</td>
                        <td>{{$c->size}}</td>
                        <td>1</td>
                        <td style="color: blue;">{{$c->status}}</td>
                        
                        <td><a type="submit" class="btn btn-primary"
                        style="margin-top: 0px;
                        color: white; font-weight: bold;"
                        href="/download/custom/{{$c->foto_produk}}">Download Gambar</a></td>

                        <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail-IDDETAIL"
                        style="margin-top: 0px; background-color: green;
                        border-color: green; color: white; font-weight: bold;">Lihat Detail Customer</button>
                        
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{$c->id}}"
                        style="margin-top: 0px; background-color: blue;
                        border-color: blue; color: white; font-weight: 400;">Edit</button>
                        <button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: red;
                        border-color: red; color: white; font-weight: 400;"
                        onclick="if (confirm('Yakin ingin menghapus order tersebut ?')) {window.location.href = '{{route('deleteOrder',$c->id)}}';}">X</button></td>
                        
                    </tr>

                    <!-- Modal Data klien -->
                    
                    <div class="modal fade" id="detail-IDDETAIL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="fs-1"> Detail </p>
                                    </div>
                                    <div class="modal-body">
                                        <p class="fs-5 fw-bold"> Nama </p>
                                        <p class="fs-6"> Nama </p>
                                        <p class="fs-5 fw-bold"> No hp </p>
                                        <p class="fs-6"> 081111 </p>
                                        <p class="fs-5 fw-bold"> Email </p>
                                        <p class="fs-6"> aaa@gmail.com </p>
                                        <p class="fs-5 fw-bold"> Alamat </p>
                                        <p class="fs-6"> Jl. aa </p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="https://wa.me/{otomatisNOHPCLIENT}" type="button" class="btn btn-secondary">Hubungi WA Client</a>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal Edit -->

                    <div class="modal fade" id="edit-{{$c->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="form">
                                <form action="{{route('updateStatusCustom',$c->id)}}" method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <select class="form-select" aria-label="selectStatus" id="valueStatus" name="status">
                                                    <option value="Menunggu Konfirmasi" @selected($c->status == "Menunggu Konfirmas")>Menunggu Konfirmasi</option>
                                                    <option value="Designing" @selected($c->status == "Designing")>Designing</option>
                                                    <option value="Waiting Design Approval (Via WA)" @selected($c->status == "Waiting Design Approval (Via WA)")>Waiting Design Approval (Via WA)</option>
                                                    <option value="Packaging" @selected($c->status == "Packaging")>Packaging</option>
                                                    <option value="Delivered" @selected($c->status == "Delivered")>Delivered</option>
                                                    <option value="Completed" @selected($c->status == "Completed")>Completed</option>
                                                    <option value="Retur" @selected($c->status == "Retur")>Retur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button href="" type="submit" class="btn btn-primary" id="saveButton" data-bs-dismiss="modal">Save changes</button>
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
