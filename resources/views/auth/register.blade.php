@extends('layouts.main')

@section('content')

<div class="col-lg-8">
  <form method="POST" action="/register">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Login</label>
      <input type="text" class="form-control @error('username') is-invalid @enderror" id="exampleInputEmail1"  name="username">
      @error('username')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
      @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword2">Password Confirmation</label>
      <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation">
    </div>
    <button type="submit" name="registerButton" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection
