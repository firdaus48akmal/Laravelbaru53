@extends('_layout.base')

@section('menu')
  @include('_layout.menu')
@stop

@section('content')

  <h1>Ini Halaman Mahasiswa</h1>

  <ul class="list-group">
    @foreach($daftar_mahasiswa as $mahasiswa)
        <a href="{{ route('mahasiswa_show', $mahasiswa->nim) }}">
          <li class="list-group-item"> {{ $no++ }}. {{ $mahasiswa->nim }} </li>
        </a>
    @endforeach
  </ul>


@stop
