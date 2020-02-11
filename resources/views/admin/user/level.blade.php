@extends('base')
@section('konten')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Level User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Manajemen User</li>
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

          <div class="card col-12">

            <!-- /.card-header -->
            <div class="card-body">
              <a href="{{ route('register') }}"><button type="button" class="mb-3 btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               <strong>+</strong>  Tambah Data
               </button></a>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nama Universitas</th>
                  <th>Provinsi</th>
                  <th>Kota</th>
                  <th>No Seluler</th>
                  <th>Email</th>
                  <th>Level</th>
                  <th><i class="fas fa-cog"></i></th>
                </tr>
                </thead>
                <tbody>
               @foreach($user as $index => $user)
                <tr>

                  <td>{{ $index+1 }}</td>
                  <td>{{ $user->name}}</td>
                  <td>{{ $user->nama_univ }}</td>
                  <td>{{ $user->provinsi }}</td>
                  <td>{{ $user->kota }}</td>
                  <td>{{ $user->no_hp }}</td>
                  <td>{{ $user->email}}</td>
                  <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                  <td class="text-center" width="100px">

                   <a style="color: #212529"href="{{ route('admin.user.edit',$user->id)}}"><button type="button" title="Setting" data-toggle="modal" data-target="" class="fas fa-cog float-left mr-1"></button></a>

                    <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                         @csrf
                           {{ method_field('DELETE') }}
                      <button type="submit" title="Hapus" data-toggle="modal" data-target="#exampleModal2" class="fas fa-trash-alt float-left "></button></a>
                    </form>


            </td>
                </tr>
               @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
     </div>
    </section>
  </div>


@endsection
