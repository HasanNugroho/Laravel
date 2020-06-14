@extends('layout/main')
    
    @section('title', 'Daftar Anggota')

    @section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mt-3">Daftar Anggota</h3>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </th>
                    </thead>
                    <tbody>
                        @foreach( $anggota as $ang )
                        <tr>
                            <th scope="row">{{ $loop -> iteration }}</th>
                            <td>{{ $ang -> nama}}</td>
                            <td>{{ $ang -> no }}</td>
                            <td>{{ $ang -> email }}</td>
                            <td>
                                <a herf="" class="badge badge-success">edit</a>
                                <a herf="" class="badge badge-danger">hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection