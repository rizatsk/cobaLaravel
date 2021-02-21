@extends('pagesNavandFooter.pages')
@section('title','Tambah Data | Mahasiswa')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-md-3 mt-4 text-center">
                <p class="text-end"><a href="/students">Kembali</a></p>
                <h1>Tambah Data Mahasiswa</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 offset-md-4 mt-4 text-center">
            <form action="/students" method="post">
            @method('')
            @csrf
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nama</span>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama lengkap" aria-label="Username" aria-describedby="basic-addon1" name="nama" id="nama" value="{{ old('nama') }}">
                @error('nama')
                    <div id="nama" class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                <div class="input-group mb-3">
                <input type="number" class="form-control @error('nim') is-invalid @enderror" placeholder="NIM Mahasiswa" name="nim" id="nim" value="{{ old('nim') }}">
                <span class="input-group-text" id="basic-addon2">NIM</span>
                @error('nim')
                    <div id="nim" class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                <label for="basic-url" class="form-label">Email</label>
                <div class="input-group mb-3">
                <span class="input-group-text @error('email') is-invalid @enderror" id="basic-addon3">Email</span>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="example@example.com">
                @error('email')
                    <div id="email" class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text">Jurusan</span>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" placeholder="Jurusan Kuliah" name="jurusan" id="jurusan" value="{{ old('jurusan') }}">
                @error('jurusan')
                    <div id="jurusan" class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-4">Tambah Data</button>
            </form>
            </div>
        </div>
    </div>
@endsection