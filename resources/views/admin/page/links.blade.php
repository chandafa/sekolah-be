@extends('layouts.main')

@section('title')
    <title>Links | Admin Panel</title>
@endsection

@section('container')
    <div class="row">
        @if ($action == 'update')
            <div class="col-md-4 offset-md-1 mt-4 p-2">
                @include('admin.partials.nav_url')
                <div class="w-100 rad bg-white position-relative shadow py-3 px-4">
                    <h5 class="poppins mb-0">Update Navbar</h5>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" value="" name="id" id="id" class="form-control"
                                placeholder="Perayaan / Peristiwa" aria-describedby="namaID">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="mt-3">Nama Navbar</label>
                            <input type="text" value="" name="nama" id="nama" class="form-control"
                                placeholder="E-raport / Instagram" aria-describedby="namaID">
                            <small id="namaID" class="text-muted d-none">Nama</small>
                        </div>
                        <div class="form-group">
                            <label for="url" class="mb-2">Url Navbar</label>
                            <input required type="text" value="" name="url" id="url" class="form-control"
                                placeholder="Perayaan / Peristiwa" aria-describedby="url">
                            <small id="url" class="text-muted d-none">Nama</small>
                        </div>
                        <div class="text-right w-100 position-absolute" style="right: 10px;">
                            <a href="" class="btn btn-white px-4 rounded-pill border-warning">Tambah</a>
                            <button class="btn btn-warning px-4 rounded-pill shadow-warning">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="col-md-4 offset-md-1 mt-4 p-2">
                <div class="w-100 rad bg-white position-relative shadow py-3 px-4">
                    <h5 class="poppins mb-0">Tambah Navbar</h5>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="mt-3 mb-2">Nama Kategori</label>
                            <input type="text" name="nama"id="nama" class="form-control"
                                placeholder="E-raport / Instagram" aria-describedby="namaID">
                            <small id="namaID" class="text-muted d-none">Nama</small>
                        </div>
                        <div class="form-group">
                            <label for="url" class="mb-2">Url Navbar</label>
                            <input required type="text" name="url" id="url" class="form-control"
                                placeholder="https://..." aria-describedby="url">
                            <small id="url" class="text-muted d-none">Nama</small>
                        </div>
                        <div class="text-right w-100">
                            <button class="btn btn-warning px-4 rounded-pill shadow-warning position-absolute"
                                style="right: 10px;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
        <div class="col-md-6 mt-4 p-2">
            <div class="w-100 table-parent bg-white">
                <div class="row p-4">
                    <div class="col-md-8">
                        <h4 class="poppins mb-0">Link</h4>
                        <p class="montserrat" style="font-size: .85rem;">Daftar Link SMKN 1 Pangkalan Kerinci
                        </p>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Link</th>
                            <th>URL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama Navbar</td>
                            <td><a href="#">https://...</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-success p-2"><i class="fas fa-pen-alt"></i></a>
                                <a href="#" class="btn btn-danger p-2"
                                    onclick="return confirm('Pengumuman akan dihapus ?')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <script>
                    $('.check-toggle').change(function() {
                        if (this.checked) {
                            $('.btn-print').removeAttr('disabled').removeClass('disabled')
                            $('.check-respond').prop('checked', true);
                        } else {
                            $('.btn-print').addClass('disabled').attr('disabled')
                            $('.check-respond').prop('checked', false);
                        }
                    });
                    $('input[name="checkPrint[]"]').change(function() {
                        var atLeastOneIsChecked = $('input[name="checkPrint[]"]:checked').length > 0;
                        if (atLeastOneIsChecked) {
                            $('.btn-print').removeAttr('disabled').removeClass('disabled')
                        } else {
                            $('.btn-print').addClass('disabled').attr('disabled')
                        }
                    });
                </script>
                <div class="row px-3">
                    <div class="col-md-6">
                        <div class="pb-3">
                            <?php
                            
                            ?>
                            <form method="GET" id="show-form" name="showForm" action="">
                                <div class="form-group d-inline-block">
                                    <input type="hidden" name="page" value="">
                                    <input type="hidden" name="id_category" value="">
                                    <input type="hidden" name="action" value="">
                                    <select id="show-select" name="show" onchange="showData()"
                                        class="form-control form-control-sm d-inline-block"
                                        style="width:70px; font-size: .7rem;" name="" id="">
                                        <option value="10" selected>10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                    </select>
                                </div>
                                <p class="montserrat d-inline" style="font-size: .7rem;">Data per halaman</p>
                                <script>
                                    function showData() {
                                        $('#show-select').change(function() {
                                            var value = $(this).val();
                                            $('#show-form').submit()
                                        });
                                    }
                                </script>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="montserrat d-inline" style="font-size: .7rem;">
                            1 dari 10</p>
                        <a href="#" class="btn btn-sm p-0 px-2 btn-white active"><i
                                class="fas fa-caret-left text-warning"></i></a>
                        <a href="#" class="btn btn-sm p-0 px-2 btn-white active">
                            <i class="fas fa-caret-right text-warning"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
