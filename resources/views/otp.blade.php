@extends('layout')

@section('content')
<div class="container">
    <form class="mb-3 mt-3" method="POST" action="/auth/check-otp">
        <div class="form-group">
            @csrf
            <label for="inputTitle">MÃ OTP</label>
            <input type="text" class="form-control" name="otp">
        </div>
        
        <button type="submit" class="btn btn-primary">Xác nhận</button>
    </form>
</div>
@endsection