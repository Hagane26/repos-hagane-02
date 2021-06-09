@extends('supporter.main')

@section('title',"Mahasiswa")

@section('container')
<div class="container">
    <div class="row">
        <div class="col-50">
            <h1 class="mt-3">Tambah Data Mahasiswa</h1>

            <form method="post" action="/student">
                @csrf
                <div class="form-group mt-3">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="form-group mt-3">
                    <label for="npm">Npm :</label>
                    <input type="text" class="form-control" id="npm" name="npm">
                </div>

                <div class="form-group mt-3">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group mt-3">
                    <label for="fakultas">Fakultas : </label>
                    <input type="text" class="form-control" id="fakultas" name="fakultas">
                </div>

                <div class="form-group mt-3">
                    <label for="prodi">Prodi : </label>
                    <input type="text" class="form-control" id="prodi" name="prodi">
                </div>
                <center>
                    <button type="submit" class="btn btn-primary mt-5">Tambah!</button>
                </center>
            </form>

        </div>
    </div>
</div>
@endsection
