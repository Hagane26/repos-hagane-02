@extends('supporter.main')

@section('title',"Mahasiswa")

@section('container')
<div class="container">
    <div class="row">
        <div class="col-50">
            <h1 class="mt-3">Detail Mahasiswa :</h1>
            <center>
            <div class="card" style="width: 30rem; border-width: 20px; border-color: #b5babd">
                <div class="card-header" style="color: #030303; font-weight: bold; font-size:15px;">
                    {{ $student->nama }}
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Npm : {{ $student->npm }}</li>
                  <li class="list-group-item">Email : {{ $student->email }}</li>
                  <li class="list-group-item">Fakultas : {{ $student->fakultas }}</li>
                  <li class="list-group-item">Prodi : {{  $student->prodi }}</li>
                  <li class="list-group-item">

                    <a href="{{ $student->id }}/edit"><button type="submit" style="background-color: green; border-radius: 8px; font-size: 12px; color: white">Edit</button></a>

                    <form method="post" action="{{ $student->id }}" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" style="background-color: red; border-radius: 8px; font-size: 12px; color: white">Hapus</button>
                    </form>
                    </li>
                    <li class="list-group-item"><a href="/student"><button type="submit" style="background-color: rgb(78, 80, 78); border-radius: 8px; font-size: 12px; color: white">Kembali</button></a></li>
                </ul>
              </div>

            </center>
        </div>
    </div>
</div>
@endsection
