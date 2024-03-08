@extends('layout.master')
@section('home')
    <div class="row">
        <div class="col-md-8 col-lg-10 order-md-last">
            @include('user.products')
        </div>
        <div class="col-md-4 col-lg-2">
            @include('user.sidebar')
        </div>
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
