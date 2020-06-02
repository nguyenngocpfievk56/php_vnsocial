@extends('layout')

@section('content')
    <h1 class="text-center mt-4"> Thêm mới Shop</h1>
    <div class="container my-5 col-md-6">
        <form method="post" action="{{route('postForm')}}" enctype="multipart/form-data">
        @csrf
            <div>
                <div class="form-group col-8 mx-auto">
                    <label for="exampleInputName">Tên Shop</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nhập tên Shop" name="name">
                </div>
                <div class="form-group col-8 mx-auto">
                    <label for="exampleInputPrice">Giá tiền</label>
                    <input type="number" class="form-control" placeholder="Nhập giá tiền" name="price">
                </div>
                <div class="form-group col-8 mx-auto">
                    <label for="exampleInputDescription">Mô tả</label>
                    <textarea class="form-control" placeholder="Nhập Mô tả" name="description"></textarea>
                </div>
                <div class="custom-file  text-center mb-4">
                    <input type="file" class="custom-file-input mx-auto" name="file">
                    <label class="custom-file-label" for="customFile">Chọn File ảnh</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-12 mx-auto">Đăng</button>
        </form>

    </div>
@endsection
