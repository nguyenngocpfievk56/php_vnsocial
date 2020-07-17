@extends('layout')

@section('css-field')
  <link rel="stylesheet" href="/css/news-detail.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-sm news-detail-block">
      <img class="news-detail-img" src="<?php echo asset($news->img); ?>"/>
      <h1><?php echo $news->title; ?></h1>
      <h4><?php echo $news->content; ?></h4>
    </div>
    <div class="col-sm news-detail-comment">
      <div class="news-detail-comment-item">
        <span class="username">Hiếu</span><span class="content">Ảnh đẹp quá</span><span class="time">4 phút trước</span>
      </div>
      <div class="news-detail-comment-item">
        <span class="username">Hiếu</span><span class="content">Ảnh đẹp quá</span><span class="time">4 phút trước</span>
      </div>
      <div class="news-detail-comment-item">
        <span class="username">Hiếu</span><span class="content">Ảnh đẹp quá</span><span class="time">4 phút trước</span>
      </div>
      <div class="news-detail-comment-item">
        <span class="username">Hiếu</span><span class="content">Ảnh đẹp quá</span><span class="time">4 phút trước</span>
      </div>
      <form class="news-detail-comment-box">
        <input type="text" class="form-control">
        <button type="submit"  class="btn btn-primary">Đăng</button>
      </form>
    </div>
  </div>
  <h3 class="latest-header">Các tin tức mới nhất</h3>
  <div class="row">
    <?php foreach($latest as $item): ?>
      <div class="col-4">
        <div class="card">
          <a href="/news/detail/<?php echo $item->id; ?>">
            <img src="<?php echo asset($item->img); ?>" class="card-img-top">
          </a>
          <div class="card-body">
            <h5 class="card-title"><?php echo $item->title ?></h5>
            <p class="card-text"><?php echo $item->content ?></p>
            <a href="#" class="btn btn-primary">Like</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
@endsection
