@extends('layouts.app')
@section('title', 'Sayur')
@section('navbar')
@parent
@endsection
@section('content')
<div class="container py-4">
    <div class="row row-cols-1 row-cols-md-4 g-4" id="cards-box">
        <div class="col">
            <div class="card h-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfkmbM1GvM_V36_Jw-mJwM6fx0uo65YZjfdA&usqp=CAU" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tanaman Sayur</h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShGXJ2c7OP70tXsePp1MNfl8j8kvVC8DxTWA&usqp=CAU"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Manfaat Sayur</h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmB1C_ftrGiHuH_PMQL4C49DJ4TpuoGe9tIA&usqp=CAU"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tanam Sayur</h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKVIv735OPI9F18eV8sNDIdHcB_9tKGEWvRA&usqp=CAU"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Panen</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
