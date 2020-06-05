@extends('layout')

@section('content')
<div class="container">
    <form class="mb-3 mt-3">
        <div class="form-group">
            <label for="inputTitle">Tiêu đề</label>
            <input type="text" class="form-control" id="inputTitle" placeholder="Abc...">
        </div>
        <div class="form-group">
            <label for="content">Nội dung</label>
            <textarea class="form-control" id="content" rows="5"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Hoàn thành</button>
    </form>
</div>
@endsection
