@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Category</h1>  
          </div>

          {{-- @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif --}}

            <div class="card-shadow">
              <div class="card-body">
                <form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                       <label for="image">Nama Kategori</label>
                       <input type="text" class="form-control" name="name" placeholder="Masukan nama kategori">
                  </div>

                  <button type="submit" class="btn btn-primary btn-block form-control">
                       Simpan
                  </button>
                </form>
              </div>
            </div>

        

        </div>
        <!-- /.container-fluid -->
@endsection