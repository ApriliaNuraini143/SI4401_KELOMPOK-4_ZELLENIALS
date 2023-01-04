@extends('layout.layout')
@section('content')
    
<!-- CONTENT -->

<div class="content" style="background-color: #1f1f1f; margin: 80px; height: 620px; border: 8px solid #C5FF01; border-radius: 15px">
    <div class="container-fluid" style="color:#ffffff">
        <div class="row">
            <div class="col-md-6 align-self-center" >
                <br>
                <h1 style="text-align:left; font-weight: bolder; font-size: 72px; margin-left: 80px;">Temukan Baju<br>Favorit Mu Disini!</h2>
            </div>
            <div class="col-md-6 align-self-end p-5" style="margin-top:20px; margin-right: 0px;">
                <div style="background-color: #1f1f1f;">
                    <div class="card-body">
                        <h2 class="mb-4">Daftar Yuk</h2>
                        <form action="{{route('create')}}" method="post">
                        @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="mb-2">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="mb-2">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="mb-2">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="mb-2">Konfirmasi Password</label>
                                <input type="password" name="password1" class="form-control">
                            </div>

                            <div class="form-group mb-3" style="display: flex; gap: 24px; align-items: center;">
                                <div class="button">
                                    <button class="btn mt-2 btn-primary px-4" link rel="stylesheet" href="../Zellenials/Pages/User/Login.php" style="background-color:#C5FF01; border-color: #C5FF01; color: black; font-weight: bolder;" name="daftar">Daftar</button>
                                </div>

                                <div class="register-btn mt-4">
                                    <p>Sudah Punya Akun? <a href="login" style="color: white;">Yuk Masuk!</a></p>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CONTENT -->
@endsection