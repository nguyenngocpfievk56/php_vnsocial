@extends('layout')

@section('content')
    <h1>Chi tiết shop</h1>
    <div class="container row mx-auto">
            <div class="col-sm-4 my-4">
                <div class="card">
                    <div class="card-header"><h4>{{ $shop->name }}</h4></div>
                    <div class="card-body">
                        <h5>{{ $shop->price }}</h5>
                        <p class="card-text">{{ $shop->description }}</p>
                        <a href="{{ route('shop.index') }}" class="btn btn-dark">Trở lại</a>
                    </div>

                </div>
            </div>
    </div>
@endsection
