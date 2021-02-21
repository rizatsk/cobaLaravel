@extends('pagesNavandFooter.pages')
@section('title','Upload | Whoami')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mt-4">
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
                <h1>Upload Gambar</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mt-4">
                <form action="/upload" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload File Gamar JPG,JPEG,PNG Maksimal ukuran 150Kb</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                    @error('image')
                    <div id="image" class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-outline-secondary mt-4">Upload</button>
                </div>
                </form>
            </div>
        </div>
        <style>
            img{
                height: 200px;
                width: 200px;
            }
        </style>
        <div class="row">
        @foreach($images as $image)
            <div class="col-sm-2 mt-4 text-center">
            <p>{{$image->image}}</p>
            <img src="img/{{$image->image}}" alt="">
            <form action="/upload/{{$image->id}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-outline-danger mt-3">Hapus</button>
            </form>
            </div>
        @endforeach
        </div>
    </div>
@endsection
