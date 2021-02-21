@extends('pagesNavandFooter.pages')
@section('title','Data | Mahasiswa')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mt-4">
                <h1>Data Mahasiswa</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mt-4">
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <a href="{{url('/students/create')}}" class="btn btn-outline-primary">Tambah Data Mahasiswa</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mt-4">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">List</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$student->nama}}</td>
                    <td>
                        <a href="/students/{{$student->id}}" class="badge bg-primary">details</a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection