@extends('base')
@section('konten')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit {{ $user->name }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Manajemen User</a></li>
            <li class="breadcrumb-item active">Edit {{ $user->name }}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card col-lg-12 col-ml-5">
            <!-- Modal -->
            <form class="" action="{{ route('admin.user.update', $user) }}" method="POST">
              @csrf
              {{ method_field('PUT') }}
              <div class="form-group mt-5 mr-5">
                  <label for="name" class="ml-3">Nama</label>

                  <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror mb-4 ml-2" name="name" value="{{ $user->name}}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                <label for="nama_univ" class="ml-2">Nama Universitas</label>
                    <input id="nama_univ" type="nama_univ" class="form-control @error('nama_univ') is-invalid @enderror mb-4 ml-2" name="nama_univ" value="{{ $user->nama_univ }}" required autocomplete="nama_univ" autofocus>
                    @error('nama_univ')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <label for="provinsi" class="ml-2">Provinsi</label>
                    <input id="provinsi" type="provinsi" class="form-control @error('provinsi') is-invalid @enderror mb-4 ml-2" name="provinsi" value="{{ $user->provinsi }}" required autocomplete="provinsi" autofocus>
                    @error('provinsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <label for="kota" class="ml-2">Kota/Kabupaten</label>
                    <input id="kota" type="kota" class="form-control @error('kota') is-invalid @enderror mb-4 ml-2" name="kota" value="{{ $user->kota }}" required autocomplete="kota" autofocus>
                    @error('kota')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <label for="email" class="ml-2">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror mb-4 ml-2" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <label for="no_hp" class="ml-2">No Seluler</label>
                        <input id="no_hp" type="no_hp" class="form-control @error('no_hp') is-invalid @enderror mb-4 ml-2" name="no_hp" value="{{ $user->no_hp }}" required autocomplete="no_hp" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror






                  @can('admin')
                  <label class="mr-5 ml-2" for="">Level</label>
                 @foreach($role as $role)
                   <div class="form-check">
                     <input class="ml-2"type="checkbox" name="roles[]" value="{{ $role->id }}"
                     @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                     <label class="ml-2">{{ $role->name }}</label>
                   </div>
                   @endforeach
                 @endcan




                 </div>
              </div>
             <hr>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary  mb-3" name="button">
                  Update
                </button>
              </div>

            </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
     </div>
    </section>
  </div>
@endsection
