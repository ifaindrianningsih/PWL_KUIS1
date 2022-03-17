@extends('layouts.master')
@section('navbar')
    <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link" href="{{ url('/')}}">Home</a></li>
            <li><a class="nav-link {{$active}}" href="{{ url('barang')}}">Barang</a></li>
            <li><a class="nav-link" href="{{ url('supplier')}}">Supplier</a></li>
            <li><a class="nav-link" href="{{ url('pelanggan')}}">Pelanggan</a></li>
            <li><a class="nav-link" href="{{ url('pegawai')}}">Pegawai</a></li>
            <li><a class="nav-link scrollto" href="{{ url('contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
@endsection

@section('content')
<section id="why-us" class="why-us">
        <div class="container">
            <div class="section-title">
                <span>Barang</span>
                <h2>Barang</h2>
                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>

            <div class="row">

            <div class="col-lg-4" data-aos="fade-up">
                <div class="box">
                <span>Nama mobil</span>
                <!-- kalo bisa disini dikasih gambar : ini misalnya  -->
                <img src="assets/img/team/team-1.jpg" width="200" height="200">
              
                <h4>Harga</h4>
                <p>(Deskripsi) Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
                <div class="box">
                <span>02</span>
                <!-- kalo bisa disini dikasih gambar -->
                <h4>Repellat Nihil</h4>
                <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                <span>03</span>
                <!-- kalo bisa disini dikasih gambar -->
                <h4> Ad ad velit qui</h4>
                <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4" data-aos="fade-up">
                <div class="box">
                <span>04</span>
                <!-- kalo bisa disini dikasih gambar -->
                <h4>Lorem Ipsum</h4>
                <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="150">
                <div class="box">
                <span>05</span>
                <!-- kalo bisa disini dikasih gambar -->
                <h4>Repellat Nihil</h4>
                <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                <span>06</span>
                <!-- kalo bisa disini dikasih gambar -->
                <h4> Ad ad velit qui</h4>
                <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
                </div>
            </div>


            </div>

        </div>
        </section><!-- End Why Us Section -->

@endsection