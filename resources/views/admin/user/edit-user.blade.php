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
      <div class="card col-lg-12 col-ml-5">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

            <!-- Modal -->
            <form class="" action="{{ route('admin.user.update', $user) }}" method="POST">
              @csrf
              {{ method_field('PUT') }}
  <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="#home" role="tab" data-toggle="tab">Home</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Profil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#references" role="tab" data-toggle="tab">Administrasi</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">
    <div class="row">
      <div class="col-6">
        <div class="card-body">
          <h3><strong>Nama :  </strong> <br>{{ $user->name }}</h3>
          <br>
          <h3><strong>Nama Universitas : </strong> <br>{{ $user->nama_univ }}</h3>
          <br>
          <h3><strong>Provinsi : </strong> <br>{{ $user->provinsi }}</h3>
          <br>
          <h3><strong>Kota/Kabupaten : </strong> <br>{{ $user->kota }}</h3>
        </div>
      </div>
      <div class="col-6">
        <img class="card-img-top ml-5 mt-3" style="width:200px; height:200px; align:center;" src="{{asset('img/1.png')}}" alt="Card image cap">
      </div>
      </div>


  </div>
  <div role="tabpanel" class="tab-pane fade" id="buzz">
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
            <hr>
            <div class="ml-4">
              <button title="Reset Form "type="reset" class="btn btn-warning  mb-3" name="button">
                <i class="fa fa-sync "></i>


              </button>
              <button type="submit" class="btn btn-success mb-3" name="button">
                Update
              </button>
            </div>
     </div>
     </div>
    </div>
  <div role="tabpanel" class="tab-pane fade" id="references">
    <div class="form-group mt-5 mr-5">
       <div class="col-md-6">

         <div class="form-group">
         <label class="ml-2" for="exampleFormControlSelect1">Provinsi</label>
         <select placeholder="silahkan pilih " class="ml-2 form-control" id="exampleFormControlSelect1">
            @foreach($provinsi as $provinsi )
           <option>{{$provinsi->provinsi}}</option>
             @endforeach
         </select>
       </div>


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


            <label class="mr-5 ml-2" for="">Level</label>
           @foreach($role as $role)
             <div class="form-check">
               <input class="ml-2"type="checkbox" name="roles[]" value="{{ $role->id }}"
               @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
               <label class="ml-2">{{ $role->name }}</label>
             </div>
             @endforeach

             <hr>
             <div class="ml-4">
               <button title="Reset Form "type="reset" class="btn btn-warning  mb-3" name="button">
                 <i class="fa fa-sync "></i>


               </button>
               <button type="submit" class="btn btn-success mb-3" name="button">
                 Update
               </button>
             </div>
   </div>

</div>
<hr>
  </div>


  </div>
</div>

</div>
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
