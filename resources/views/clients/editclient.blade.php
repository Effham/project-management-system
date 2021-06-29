@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edit A Client</h1>
    <form method="POST" action="{{route('clients.update',$client->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            {{ csrf_field() }}
          <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}">
        </div>
        <div class="form-group">

          <input type="text" class="form-control" name="email" value="{{$client->email}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phno" value="{{$client->phno}}">
          </div>
          <button type="submit" class="btn btn-primary">Save Client Changes</button>
      </form>
</div>

@endsection
