@extends('layouts.app')
@section('content')
<div class="container">
    <hr>
    {{-- <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createclientmodal">Create New Project</button>

    </div> --}}
    <h1>Create Project for <strong class="">{{$client->name}}</strong></h1>
    <form method="POST" action="/create/project">
        <div class="form-group">
            {{ csrf_field() }}
            <input type="hidden" name="client_id" value="{{$client->id}}">
          <input type="text" class="form-control" id="name" name="domainname" placeholder="Enter Domain Name">
        </div>
        <div class="container mb-2">
            <h5>Select Services</h5>
            @foreach ($services as $service)
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="services[]" id="{{$service->id}}" value="{{$service->name}}">
                <label class="custom-control-label" for="{{$service->id}}">{{$service->name}}</label>
              </div>
              @endforeach

        </div>

        <div class="form-group">

          <input type="number" class="form-control" name="totalcost" placeholder="Enter Total Cost">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="advancecost" placeholder="Enter Advance Cost">
          </div>
          <div class="container mb-2">
            <h5>Select Payment Type</h5>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymenttype" id="exampleRadios1" value="Bank Transfer" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Bank transfer
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="paymenttype" id="exampleRadios2" value="Online Payment">
                <label class="form-check-label" for="exampleRadios2">
                  Online Payment
                </label>
              </div>
          </div>

          <button type="submit" class="btn btn-primary">Add Project</button>
      </form>

@endsection
