@extends('layout.admin')

@section('title', 'Index')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Produk</h1>
                    @auth
        <p>Selamat Datang {{ Auth::user()->name }}!</p>
    @endauth

    @guest
        <p>Anda belum login</p>
    @endguest
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Produk</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

      <div class="container item-center">
        <div class="d-flex">
            <a href="{{ url('product.add')}}" class="btn btn-primary mt-3" type="button">+ Tambah Produk</a>
         </div><br>

              <table class="table table-hover text-light">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                  <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>

                        <a href="/product/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                        <a href="/product/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
      </div>
    </div>



@endsection
