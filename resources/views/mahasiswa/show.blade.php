@extends('_layout.base')

@section('menu')
  @include('_layout.menu')
@stop

@section('content')
  <h1> Nama mahasiswa adalah {{ $mahasiswa->nama }} </h1>
@stop
