@extends('main')

@section('container')

<h1 class="text-center text-secondary">Daftar Mahasiswa Kampus Unsika</h1>

<div class="row py-5">
  @foreach ($mahasiswa as $nama)
    <div class="py-2 col-md-6 ">
      <div class="list-group-item text-center bg-light"> {{$nama}} </div>
    </div>
  @endforeach
</div>

@endsection