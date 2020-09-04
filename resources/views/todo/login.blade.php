@extends('layout.auth')

@section('login')
<div class="form-wrapper">

    <h4 class="pb-2">Sign in</h4>

    <!-- form -->
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username or email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="#">Reset password</a>
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>
        <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="/register" class="btn btn-outline-light btn-sm">Register now!</a>
    </form>

</div>
@endsection
