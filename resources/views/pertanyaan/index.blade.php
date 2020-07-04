<<<<<<< HEAD
@extends('adminlte.master')
@section('content')
<div class="ml-2 ">
    <h1>LaravelLab</h1>
<a href="/create" class="btn btn-primary mb-2">Create New Question</a>
            <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>Judul Pertanyaan</th>
                <th>Isi Pertanyaan</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pertanyaan as $key => $pertanyaan)
            <tr>
            <td> {{ $key + 1}} </td> 
            <td> {{ $pertanyaan->judul }}</td>   
            <td> {{ $pertanyaan->isi }}</td>   
            <td><a href="/pertanyaan/{{ $pertanyaan -> id }}" class="btn btn-sm btn-info">Answer</a></td>
            </tr>                  
             @endforeach
           </tbody>
                </table>
</div>               
=======
@extends('adminlte.master')
@section('content')
            <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Judul Pertanyaan</th>
                <th>Isi Pertanyaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pertanyaan as $key => $pertanyaan)
            <tr>
            <td> {{ $key + 1}} </td> 
            <td> {{ $pertanyaan->judul }}</td>   
            <td> {{ $pertanyaan->isi }}</td>   
            </tr>                  
             @endforeach
           </tbody>
                </table>
>>>>>>> f4aeb781d03f7c0b64938ce81efe42ed7fca6d14
@endsection