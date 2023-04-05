@extends('layout.admin')

@section('title', 'Add | Product')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <strong>Tambah Produk</strong> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <form action="{{url('/product')}}" method="post">
            @csrf
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                <input type="text" class="form-control @error ('product_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name">
                <div id="emailHelp" class="form-text">Produk tidak boleh lebih dari 255</div>
                @error('product_name')
                <div class="invalid-feedback">
                    Nama produk tidak boleh kosong
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga</label>
                <input type="text" class="form-control @error ('price_product') is-invalid @enderror" id="exampleInputPassword1" name="price_product">
                @error('product_name')
                <div class="invalid-feedback">
                    Harga tidak boleh kosong
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                <input type="text" class="form-control @error ('product_descripstion') is-invalid @enderror" id="exampleInputPassword1" name="product_descripstion">
                @error('product_name')
                <div class="invalid-feedback">
                    Deskripsi tidak boleh kosong
                </div>
                @enderror
            </div>
            <label for="exampleInputEmail1" class="form-label">Kategori </label><br>
            <select class="form-select @error ('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id">
                <option selected></option>
                @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{$item->id}} - {{$item->name}}</option>
                @endforeach
              </select>
              @error('product_name')
                <div class="invalid-feedback">
                </div>
                @enderror
            <button type="submit" class="d-flex btn btn-success mt-3 justify-content-center">Tambah</button>
        </form>
    </div>
</div>
@endsection
