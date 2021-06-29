@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edit A Service</h1>
    <form method="POST" action="{{route('services.update',$service->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            {{ csrf_field() }}
          <input type="text" class="form-control" id="name" name="name" value="{{$service->name}}">
        </div>
          <button type="submit" class="btn btn-primary">Save Service Changes</button>
      </form>
</div>

@endsection
