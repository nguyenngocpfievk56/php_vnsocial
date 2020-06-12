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
          <img src="https://cdn.24h.com.vn/upload/4-2019/images/2019-12-17/1576580871-929bdf4f16b86295376a79e7a8a0b7fe.jpg" class="card-img-top">
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
