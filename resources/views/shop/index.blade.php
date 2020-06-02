@extends('layout')

@section('content')

    <h1 class="text-center mt-4"> Danh sách Shop</h1>
    <div class="text-center">
        <a href="createShop"><button >Tạo bài viết mới</button></a>
    </div>
{{--    @if(!empty($shop))--}}
{{--    <div class="container row mx-auto">--}}
{{--        @foreach($shops as $shop)--}}
{{--            <div class="col-sm-4 my-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header"><h4>{{$shop->name}}</h4></div>--}}
{{--                    <div class="card-body">--}}
{{--                        <h5>{{$shop->price}}</h5>--}}
{{--                        <p class="card-text">{{$shop->description}}</p>--}}
{{--                        <a href="#" class="btn btn-primary">Chi tiết</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    @else--}}
{{--        <div class="text-center">--}}
{{--            <p> Chưa có shop nào</p>--}}
{{--        </div>--}}
{{--    @endif--}}
    <div class="container row mx-auto">
        @for($i = 1; $i <= 6; $i++)
                <div class="col-sm-4 my-4">
                    <div class="card">
                        <div class="card-header"><h4>shop thứ {{$i}}</h4></div>
                        <div class="card-body">
                            <h5>{{ $i }}0000000</h5>
                            <p class="card-text">Mô tả của shop thứ {{ $i }}</p>
                            <a href="#" class="btn btn-primary">Chi tiết của shop {{ $i }}</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

@endsection
