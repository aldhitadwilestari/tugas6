@extends('layout.admin')

@section('title', 'Index')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Kategori</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Kategori</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

      <div class="container item-center">
        <div class="d-flex">
            <a href="{{ url('category.add')}}" class="btn btn-primary mt-3" type="button">+ Tambah Kategori</a>
         </div><br>

              <table class="table table-hover text-light">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                  <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a href="/category/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                        <a href="/category/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
      </div>
    </div>



@endsection
