@extends('layouts.app')
@section('title', 'Berita')
@section('navbar')
@parent
@endsection
@section('content')
<div class="container py-4">
    <div class="row row-cols-1 row-cols-md-4 g-4" id="cards-box">
        <div class="col">
            <div class="card h-100">
                <img src="https://berita.depok.go.id/storage/posts//GBwdc4PdQdUhmH1mN9FtziKSPHfCKppa5NzaYXOo.webp"
                    class="card-img-top">
                <div class="card-body">
                    <a href="/news/Wakil Wali Kota Depok, Imam Budi Hartono yang mengajak warga untuk merasakan keseruan panem beraneka ragam sayuran di kediamannya."><h5 class="card-title">Intip Keseruan Bang Imam Panen Sayur-Mayur di Pekarangan Rumah</h5></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
