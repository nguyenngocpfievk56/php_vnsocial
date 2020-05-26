<div class="container">
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
      <form method="GET" action="/post">
        <div class="alert alert-primary" role="alert">
          <?php
            $message = "Hãy nhập vào 2 số và ấn nút tính tổng";
            if ($t2s) {
              $message = "Tổng 2 số là " . $t2s;
            }
            echo $message;
          ?>
          
        </div>
        <div class="form-group">
          <label>So thu nhat</label>
          <input class="form-control" name="stn" value="<?php echo $stn; ?>">
        </div>
        <div class="form-group">
          <label>So thu hai</label>
          <input class="form-control" name="sth" value="<?php echo $sth; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Tinh tong</button>
      </form>
    </div>
    <div class="col">
    </div>
  </div>
</div>

<style>

.green {
  background-color: green;
}
.red {
  background-color: red;
}
.blue {
  background-color: blue;
}
</style>
