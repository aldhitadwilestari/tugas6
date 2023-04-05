@extends('layout.admin')

@section('title', 'Edit')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <strong>Edit Kategori</strong> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Kategori</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
    <form action="/category/{{ $category->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error ('category_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name" value="{{$category->name}}">
            <div id="emailHelp" class="form-text">Produk tidak boleh lebih dari 255</div>
            @error('category_name')
            <div class="invalid-feedback">
                Nama produk tidak boleh kosong
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error ('category_descripstion') is-invalid @enderror" id="exampleInputPassword1" name="category_descripstion" value="{{$category->description}}">
            @error('category_name')
            <div class="invalid-feedback">
                Deskripsi tidak boleh kosong
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-warning mt-3">Edit</button>
    </form>
</div>
@endsection
