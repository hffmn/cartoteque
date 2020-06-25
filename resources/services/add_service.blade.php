@extends('layouts.main')

@section('content')
<h2>Adding new service</h2>
<form action="/services/add" method="POST">
  @csrf
  <input type="text" name="name" class="@error('name') is-invalid @enderror" placeholder="services name"> <br>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <input type="text" name="price" class="@error('price') is-invalid @enderror"  placeholder="price"> <br>
  @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <textarea name="description" class="@error('description') is-invalid @enderror" rows="8" cols="80" placeholder="description"></textarea> <br>
  @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary" name="addServiceButton">Add service</button>
</form>
@endsection
