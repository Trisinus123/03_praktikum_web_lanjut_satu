@extends('layouts.app')
@section('title', 'Buah')
@section('navbar')
@parent
@endsection
@section('content')
<div class="container py-4">
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/buah1.jpeg') }}"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/buah2.jpeg') }}"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/buah3.jpeg') }}"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
