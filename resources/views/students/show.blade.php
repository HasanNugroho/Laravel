@extends('layout/main')
    
    @section('title', 'Daftar Anggota')

    @section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-3">Daftar Anggota</h3>
                <ul class="list-group">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $student -> nama}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $student -> no}}</h6>
                            <p class="card-text">{{ $student -> email}}</p>
                            <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type ="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="/students" class="card-link">kembali</a>
                        </div>
                    </div>
                </ul>
                
            </div>
        </div>
    </div>
    @endsection