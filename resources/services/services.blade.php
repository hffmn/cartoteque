@extends('layouts.main')

@section('content')
<a href="/services/add" class="btn btn-primary">Add new service</a>

<div class="">
  @foreach($services as $service)
    <div class="card">
      <h5>{{ $service->name }}</h5>
      <span>Price: {{ $service->price }}</span>
      <p>{{ $service->description }}</p>
    </div>
  @endforeach
</div>

@endsection
