@extends('layouts.app')
@section('title', 'Contact Us')
@section('navbar')
@parent
@endsection
@section('content')
    <div style="background-image: url('{{ asset('img/main.jpeg') }}')">
        <div class="col-md-7 offset-md-1 mb-6" style="padding: 64px">
            <form>
              <h5 class="text-white">Contact Us</h5>
              <p class="text-white">Anda dapat menghubungi kami melalui E-mail dibawah ini</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
    </div>
@endsection
