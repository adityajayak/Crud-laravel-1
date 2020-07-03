@extends('adminlte.master')

@section('content')
<div class=" ml-4  col-sm-6">
<form action =" /pertanyaan" ,method="POST">
    @csrf
    <div class="form-group">
        <label for="Judul">Judul Pertanyaan:</label>
        <input type="text" class="form-control " placeholder="Enter Judul Pertanyaan" id="judul">
      </div>
      <div class="form-group ">
        <label for="Isi">isi Pertanyaan</label>
        <input type="text" class="form-control " placeholder="Enter isi Pertanyaan" id="isi">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection