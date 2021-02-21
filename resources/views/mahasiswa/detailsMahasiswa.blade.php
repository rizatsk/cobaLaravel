@extends('pagesNavandFooter.pages')
@section('title','Data | Mahasiswa')
@section('container')
<div class="container">
        <div class="row">
            <div class="col-sm-4 offset-md-5 mt-4">
                <h1>Data Mahasiswa</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 offset-md-5 mt-4 ">
                <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <p class="card-text">{{$student -> nim}}</p>
                    <p class="card-text">{{$student -> email}}</p>
                    <p class="card-text">{{$student -> jurusan}}</p>
                    <a href="/students/{{$student->id}}/edit" class="badge bg-primary">Edit</a> 
                    <form action="/students/{{$student->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="badge bg-danger">Hapus</button>
                    </form>
                    <p><a href="{{url('/students')}}" class="btn btn-outline-dark mt-3">Kembali</a></p>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mt-4 text-center">
                    
            </div>
        </div>
</div>
@endsection