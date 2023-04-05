

@extends('layouts.admin')

@section('title', 'Homepage')
@section('content')
    <h1>Homepage</h1>
    @auth
        <p>Selamat Datang {{ Auth::user()->name }}!</p>
    @endauth

    @guest
        <p>Anda belum login</p>
    @endguest
@endsection
