@extends('layout.master')
@section('home')
    <div class="col-md-8 col-lg-10 order-md-last">
        @include('user.products')
    </div>
    <div class="col-md-4 col-lg-2">
        @include('user.sidebar')
    </div>
@endsection
