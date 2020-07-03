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
            <td> {{ $pertanyaan->Judul }}</td>   
            <td> {{ $pertanyaan->isi }}</td>   
            </tr>                  
             @endforeach
           </tbody>
                </table>
@endsection