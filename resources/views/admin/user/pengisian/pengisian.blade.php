@extends('base')
@section('konten')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pengisian Kusioner</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Pengisian Kusioner</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <section class="content">
              <div class="container-fluid">
                <div class="card">
                  <div class="card-header">
                   <h3>Daftar Soal</h3>
                  </div>
                  <div class="card-body">
                    <p>
                      <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Lihat Soal
                      </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body ">
                        <div id="myDIV">
                    <a href="#"><button type="button" class="soal soalactive" name="button">1</button></a>
                    <a href="#"><button type="button" class="soal" name="button">2</button></a>
                    <a href="#"><button type="button" class="soal" name="button">3</button></a>
                    <a href="#"><button type="button" class="soal" name="button">4</button></a>
                    <a href="#"><button type="button" class="soal" name="button">5</button></a>
                    <a href="#"><button type="button" class="soal" name="button">6</button></a>
                    <a href="#"><button type="button" class="soal" name="button">7</button></a>
                    <a href="#"><button type="button" class="soal" name="button">8</button></a>
                    <a href="#"><button type="button" class="soal" name="button">9</button></a>
                    <a href="#"><button type="button" class="soal" name="button">10</button></a>
                    <a href="#"><button type="button" class="soal" name="button">11</button></a>
                    <a href="#"><button type="button" class="soal" name="button">12</button></a>
                    <a href="#"><button type="button" class="soal" name="button">13</button></a>
                    <a href="#"><button type="button" class="soal" name="button">14</button></a>
                    <a href="#"><button type="button" class="soal" name="button">15</button></a>
                    <a href="#"><button type="button" class="soal" name="button">16</button></a>
                    <a href="#"><button type="button" class="soal" name="button">17</button></a>
                    <a href="#"><button type="button" class="soal" name="button">18</button></a>
                    <a href="#"><button type="button" class="soal" name="button">19</button></a>
                    <a href="#"><button type="button" class="soal" name="button">20</button></a>
                    <a href="#"><button type="button" class="soal" name="button">21</button></a>
                    <a href="#"><button type="button" class="soal" name="button">22</button></a>
                    <a href="#"><button type="button" class="soal" name="button">23</button></a>
                    <a href="#"><button type="button" class="soal" name="button">24</button></a>
                    <a href="#"><button type="button" class="soal" name="button">25</button></a>
                    <a href="#"><button type="button" class="soal" name="button">26</button></a>
                    <a href="#"><button type="button" class="soal" name="button">27</button></a>
                    <a href="#"><button type="button" class="soal" name="button">28</button></a>
                    <a href="#"><button type="button" class="soal" name="button">29</button></a>
                    <a href="#"><button type="button" class="soal" name="button">30</button></a>
                    <a href="#"><button type="button" class="soal" name="button">31</button></a>
                    <a href="#"><button type="button" class="soal" name="button">32</button></a>
                    <a href="#"><button type="button" class="soal" name="button">33</button></a>
                    <a href="#"><button type="button" class="soal" name="button">34</button></a>
                    <a href="#"><button type="button" class="soal" name="button">35</button></a>
                    <a href="#"><button type="button" class="soal" name="button">36</button></a>
                    <a href="#"><button type="button" class="soal" name="button">37</button></a>
                    <a href="#"><button type="button" class="soal" name="button">38</button></a>
                    <a href="#"><button type="button" class="soal" name="button">39</button></a>
                    <a href="#"><button type="button" class="soal" name="button">40</button></a>
                    <a href="#"><button type="button" class="soal" name="button">41</button></a>
                    <a href="#"><button type="button" class="soal" name="button">42</button></a>
                    <a href="#"><button type="button" class="soal" name="button">43</button></a>
                    <a href="#"><button type="button" class="soal" name="button">44</button></a>
                    </div>
                      </div>
                    </div>
                 </div>
                </div>
          @yield('soal')

</div>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("soal");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("soalactive");
  current[0].className = current[0].className.replace(" soalactive", "");
  this.className += " soalactive";
  });
}
</script>

<!-- /.content-wrapper -->
@endsection
