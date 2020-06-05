@extends('layout')

@section('content')

    <h1 class="text-center mt-4"> Danh sách Shop</h1>
    <div class="text-center">
        <a href="{{ route('shop.create') }}"><button >Tạo bài viết mới</button></a>
    </div>
    @if(empty($shop))
    <div class="container row mx-auto">
        @foreach($shops as $shop)
            <div class="col-sm-4 my-4">
                <div class="card">
                    <div class="card-header"><h4>{{$shop->name}}</h4></div>
                    <div class="card-body">
                        <h5>{{$shop->price}}</h5>
                        <p class="card-text">{{$shop->description}}</p>
                        <a href="{{ route('shop.detail', $shop->id) }}" class="btn btn-primary" >Chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @else
        <div class="text-center">
            <p> Chưa có shop nào</p>
        </div>
    @endif

@endsection
