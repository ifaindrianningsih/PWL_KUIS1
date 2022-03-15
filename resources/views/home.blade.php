@extends('layouts.master')
@section('navbar')
    <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link {{$active}}" href="{{ url('/')}}">Home</a></li>
            <li><a class="nav-link" href="{{ url('barang')}}">Barang</a></li>
            <li><a class="nav-link" href="{{ url('supplier')}}">Supplier</a></li>
            <li><a class="nav-link" href="{{ url('pelanggan')}}">Pelanggan</a></li>
            <li><a class="nav-link" href="{{ url('pegawai')}}">Pegawai</a></li>
            <li><a class="nav-link scrollto" href="{{ url('contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
@endsection

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>Welcome to WeCar</h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>

    <div class="container">
        <div class="section-title">
            <span>About</span>
            <h2>About</h2>
            <p>Ini website hasil kerjaan Ifa dan Irma wakakakkakak</p>
            <p>Industri otomotif Indonesia telah menjadi sebuah pilar penting dalam 
                sektor manufaktur negara ini karena banyak perusahaan mobil yang terkenal di dunia 
                membuka (kembali) pabrik-pabrik manufaktur mobil atau meningkatkan kapasitas produksinya 
                di Indonesia, negara dengan ekonomi terbesar di Asia Tenggara. Terlebih lagi, Indonesia 
                mengalami transisi yang luar biasa karena berubah dari hanya menjadi tempat produksi mobil 
                untuk diekspor (terutama untuk wilayah Asia Tenggara) menjadi pasar penjualan (domestik) mobil 
                yang besar karena meningkatnya produk domestik bruto (PDB) per kapita. Bagian ini mendiskusikan 
                industri mobil di Indonesia.</p>
            
            <p>Industri otomotif Indonesia telah menjadi sebuah pilar penting dalam 
                sektor manufaktur negara ini karena banyak perusahaan mobil yang terkenal di dunia 
                membuka (kembali) pabrik-pabrik manufaktur mobil atau meningkatkan kapasitas produksinya 
                di Indonesia, negara dengan ekonomi terbesar di Asia Tenggara. Terlebih lagi, Indonesia 
                mengalami transisi yang luar biasa karena berubah dari hanya menjadi tempat produksi mobil 
                untuk diekspor (terutama untuk wilayah Asia Tenggara) menjadi pasar penjualan (domestik) mobil 
                yang besar karena meningkatnya produk domestik bruto (PDB) per kapita. Bagian ini mendiskusikan 
                industri mobil di Indonesia.</p>
        </div>
    </div>

    @endsection