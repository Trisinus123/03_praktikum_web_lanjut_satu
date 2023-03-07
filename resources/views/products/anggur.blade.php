@extends('layouts.app')
@section('title', 'pohon anggur')
@section('navbar')
@parent
@endsection
@section('content')
<div class="container py-4">
    <div class="row row-cols-1 row-cols-md-4 g-4" id="cards-box">
        <div class="col">
            <div class="card h-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_sTDm8_DrOiAgnLEeqgSU6t9lCQO9KrrIHQ&usqp=CAU"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Pohon anggur Branzil</h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTplc10YXXBHZnvJsPGZn10EO4liWDvEimxYA&usqp=CAU"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src=""
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMJBUVVkeZYMc3JjbHP4imynm8kSUep2DjEA&usqp=CAU"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
