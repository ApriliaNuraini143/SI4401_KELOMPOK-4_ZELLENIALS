<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Admin - Custom Produk</title>
    </head>

    <body style="background-color: #1f1f1f; display: flex;">

        <!-- SIDEBAR -->

        <header>

            <?php require ('../../Templates/sidebar.php');?>

        </header>

        <!-- SIDEBAR -->

        <!-- CONTENT -->

        <div class="contentSection" style="height: 100vh;">
            <div class="title">
                <h1 style="color: white; margin: 56px 40px;">Custom Product</h1>
            </div>

        <!-- TABEL CUSTOM -->

            <div class="detail-container" style="background-color: white; width: 1370px; padding: 20px; border-radius: 15px;
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
                        <tr>
                        <th scope="row">1</th>
                        <td>Brainstorming - Article 2020</td>
                        <td>Hitam</td>
                        <td>L</td>
                        <td>1</td>
                        <td style="color: blue;">Menunggu Konfirmasi</td>
                        <td><button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: green;
                        border-color: green; color: white; font-weight: bold;">Download Gambar</button></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                        style="margin-top: 0px; background-color: blue;
                        border-color: blue; color: white; font-weight: 400;">Edit</button>
                        <button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: red;
                        border-color: red; color: white; font-weight: 400;">X</button></td>
                        </tr>

                        <tr>
                        <th scope="row">2</th>
                        <td>Money Take Control</td>
                        <td>Hitam</td>
                        <td>L</td>
                        <td>1</td>
                        <td style="color: blue;">Menunggu Konfirmasi</td>
                        <td><button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: green;
                        border-color: green; color: white; font-weight: bold;">Download Gambar</button></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                        style="margin-top: 0px; background-color: blue;
                        border-color: blue; color: white; font-weight: 400;">Edit</button>
                        <button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: red;
                        border-color: red; color: white; font-weight: 400;">X</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- MODAL -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inputImg">
                        <p style="margin-bottom: 0.5rem;">Desain Admin</p>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="0" selected>Waiting for Admin</option>
                            <option value="1">Waiting for Client Approval</option>
                            <option value="2">Client Approved</option>
                            <option value="3">On Process</option>
                            <option value="4">Delivered</option>
                            <option value="5">Completed</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>

        <!-- CONTENT -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
    
</html>