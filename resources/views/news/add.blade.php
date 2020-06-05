@extends('layout')

@section('content')
  <br>
  <div class="row">
    <div class="col col-md-6 offset-md-3">
      <h3>Đăng tin mới</h3>
      <form action="/news/store" method="POST">
        <div class="form-group">
          <label>Tiêu đề bài viết</label>
          <input type="text" class="form-control" placeholder="Hãy nhập vào đây" name="title">
        </div>
        <div class="form-group">
          <label>Nội dung bài viết</label>
          <input type="text" class="form-control" placeholder="Hãy nhập vào đây" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Đăng tin</button>
        <button type="button" class="btn btn-secondary">Quay trở lại danh sách</button>
      </form>
    </div>
  </div>
  <br>
@endsection
