@extends('layout/main')
    
    @section('title', 'Daftar Anggota')

    @section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="mt-3">Form Tambah Anggota</h3>
                
                <form method="post" action="/students">
                  @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" value="{{ old('nama') }}">
                        <div class="invalid-feedback">
                            Isi Coy!!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no">No</label>
                        <input type="text" class="form-control @error('no') is-invalid @enderror" id="no" placeholder="masukan no" name="no" value="{{ old('no') }}">
                        <div class="invalid-feedback">
                            Isi Coy!!
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="masukan email" name="email" value="{{ old('email') }}">
                        <div class="invalid-feedback">
                            Isi Coy!!
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah!!</button>
                </form>
                
            </div>
        </div>
    </div>
    @endsection