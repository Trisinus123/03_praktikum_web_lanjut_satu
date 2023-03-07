@extends('layouts.app')
@section('title', 'Tanaman apel')
@section('navbar')
@parent
@endsection
@section('content')
<div class="container py-4">
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/apel1.jpeg') }}"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/apel2.jpeg') }}"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/apel3.jpg') }}"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
