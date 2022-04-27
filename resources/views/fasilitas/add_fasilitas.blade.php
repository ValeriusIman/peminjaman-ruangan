@extends('template.base')
@section('title','Fasilitas')
@section('description','Tambah Fasilitas')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Fasilitas</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="col-md-6">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah</h3>
            </div>


            <form id="form-tambah" action="{{url('fasilitas')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Kode</label>
                        <input type="text" name="kode" class="form-control" id="kode">
                    </div>
                    <div class="form-group">
                        <label for="email">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" id="btn-submit" class="btn btn-sm btn-primary">Simpan</button>
                    <a href="{{url('fasilitas')}}" type="button" class="btn btn-sm btn-success">Kembali</a>
                </div>
            </form>
        </div>

    </div>
    <script>
        $(function () {
            $("#btn-submit").on('click', function () {
                $("#form-tambah").submit();
            });
            $('#form-tambah').validate({
                rules: {
                    kode: {
                        required: true,
                    },
                    nama: {
                        required: true,
                    },
                },
                messages: {
                    kode: {
                        required: "Silahkan masukkan kode",
                    },
                    nama: {
                        required: "Silahkan masukkan nama",
                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection
