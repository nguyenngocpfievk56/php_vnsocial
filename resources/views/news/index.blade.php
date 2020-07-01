@extends('layout')

@section('css-field')
<link rel="stylesheet" href="/css/news-custom.css">
@endsection

@section('content')
  
  <?php
    if ($news): 
      foreach ($news as $index => $item):
        if ($index % 3 == 0) echo '<div class="row news-row">';
  ?>
      <div class="col-4">
        <div class="card">
          <img src="<?php echo asset($item->img); ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php echo $item->title ?></h5>
            <p class="card-text"><?php echo $item->content ?></p>
            <a href="#" class="btn btn-primary">OK</a>
          </div>
        </div>
      </div>
  <?php
        if ($index % 3 == 2 || ($index == sizeof($news) - 1)) echo "</div>";
      endforeach;
    endif;
  ?>
@endsection
