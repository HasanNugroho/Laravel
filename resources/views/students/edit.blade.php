@extends('layout/main')
    
    @section('title', 'Edit')

    @section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="mt-3">Form Edit Profil</h3>
                
                <form method="post" action="/students/{{ $student->id }}">
                @method('patch')
                  @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" value="{{ $student->nama }}">
                        <div class="invalid-feedback">
                            Isi Coy!!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no">No</label>
                        <input type="text" class="form-control @error('no') is-invalid @enderror" id="no" placeholder="masukan no" name="no" value="{{ $student->no }}">
                        <div class="invalid-feedback">
                            Isi Coy!!
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="masukan email" name="email" value="{{ $student->email }}">
                        <div class="invalid-feedback">
                            Isi Coy!!
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah data</button>
                </form>
                
            </div>
        </div>
    </div>
    @endsection