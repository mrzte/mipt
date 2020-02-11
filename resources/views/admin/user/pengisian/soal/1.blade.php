@extends('admin.user.pengisian.pengisian')
@section('soal')
<table id="example1" class="table table-striped">
  <thead>
  <tr>
    <th>No</th>
    <th>Pilar</th>
    <th>Indikator</th>
    <th>Definisi</th>
  </tr>
  </thead>
  <tbody>

  <tr>

 <td>1</td>
 <td>Kebijakan</td>
 <td>Pendidikan Kewirausahaan</td>
 <td>Pendidikan sudah menjadi hal yang sangat penting untuk di perhatikan</td>

  </tr>
  </tbody>
</table>

<div class="card">
<div class="card-header">
<h3>Pertanyaan</h3>
</div>
<div class="card-body">
<p>Apakah PT mewajibkan para pelamar nya pernah belajar kewirausahaan?</p>
</div>
</div>

<div class="card">
<div class="card-header">
<h3>Panduan Pertanyaan</h3>
</div>
<div class="card-body">
<p>Setiap Jawaban Bernilai 5</p>
</div>
</div>
<form method="post" action="{{ route('soal2')}}">
<div class="card">
<div class="card-header">
<h3><strong>Jawaban</strong></h3>
</div>
<div class="card-body">
<p>Silahkan Pilih</p>
<div class="mb-3">
<input class="mr-2 mb-1"type="checkbox" name="a" value="Setuju">
<label for="a">Apakah Benar?</label>
</div>
<div class="mb-3">
<input class="mr-2 mb-1"type="checkbox" name="a" value="Setuju">
<label for="a">Ah Masa iya?</label>
</div>
<div class="mb-3">
<input class="mr-2 mb-1"type="checkbox" name="a" value="Setuju">
<label for="a">Serius gak?</label>
</div>
<div class="mb-3">
<input class="mr-2 mb-1"type="checkbox" name="a" value="Setuju">
<label for="a">Hmm ?</label>
</div>
<div><strong>Data Pendukung</strong></div>
<hr>
<form>
<div class="form-group">
 <label for="exampleFormControlFile1">Silahkan Upload File</label>
 <input type="file" class="form-control-file" id="exampleFormControlFile1">
</div>
</form>
<div class="float-right">

<a href="{{ route('soal2')}}"> <button type="button" class="btn btn-primary" name="button">Skip</button></a>
<button type="submit" class="btn btn-primary" name="button">Next</button>
</form>
</div>
</div>
</div>


<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
@endsection
