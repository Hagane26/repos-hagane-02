@extends('supporter.main')

@section('title',"Mahasiswa")

@section('container')
<div class="container">
    <div class="row">
        <div class="col-50">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                 @endif
            <table class="table">
                <thead style="background-color: #2298d4;">
                    <tr>
                        <th scope="col">#</td>
                        <th scope="col">Nama</td>
                        <th scope="col">Npm</td>
                        <th scope="col">Email</td>
                        <th scope="col">Fakultas</td>
                        <th scope="col">Prodi</td>
                        <th scope="col">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $std)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $std->nama }}</td>
                        <td>{{ $std->npm }}</td>
                        <td>{{ $std->email }}</td>
                        <td>{{ $std->fakultas }}</td>
                        <td>{{ $std->prodi }}</td>
                        <td>
                            <a href="/student/{{ $std->id }}"><button type="submit" style="background-color: #23abeb; border-radius: 8px; font-size: 12px; color: white">Detail</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <center>
                <p>
                    <a href="/student/create"><button type="submit" style="background-color: #23abeb; border-radius: 8px; font-size: 18px; color: white">Tambah</button></a>
                </p>
            </center>
        </div>
    </div>
</div>
@endsection
