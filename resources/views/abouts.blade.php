@extends('layouts.app')
@section('content')

@foreach ($about as $item)
    

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    {{-- <div class="col-md-4">
      {{-- <img src="..." class="card-img" alt="..."> --}}
    {{-- </div>  --}}
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$item -> nama}}</h5>
        <p class="card-text">{{$item -> isi}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>      
  </div>
</div>
@endforeach
@endsection