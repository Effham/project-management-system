@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="container-fluid mb-1 mt-1">
      <h1 class="h5 no-margin-bottom text-center">Create Project For <strong>{{$client->name}}</strong></h1>
    </div>
  </div>
<div class="container block">

    {{-- <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createclientmodal">Create New Project</button>

    </div> --}}
    <form method="POST" action="/create/project">
        <div class="form-group">
            {{ csrf_field() }}
            <input type="hidden" name="client_id" value="{{$client->id}}">
            <label class="form-control-label">Domain Name:</label>
          <input type="text" class="form-control" id="name" name="domainname" placeholder="Enter Domain Name">
        </div>
        <div class="container">
            <label class="form-control-label">Select Services:</label>

            <div class="form-group row">
                @foreach ($services as $service)
                <div class="col-sm-12 mb-0">
                  <div class="i-checks mb-0">
                    <input id="{{$service->id}}" type="checkbox" name="services[]" value="{{$service->name}}" class="checkbox-template">
                    <label for="{{$service->id}}">{{$service->name}}</label>
                  </div>
                </div>
                @endforeach
              </div>



            {{-- <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="services[]" id="{{$service->id}}" value="{{$service->name}}">
                <label class="custom-control-label" for="{{$service->id}}">{{$service->name}}</label>
              </div> --}}



        </div>

        <div class="form-group">

          <input type="number" class="form-control" name="totalcost" placeholder="Enter Total Cost">
        </div>
        <div class="form-group">

            <input type="number" class="form-control" name="advancecost" placeholder="Enter Advance Cost">
          </div>
          <div class="container mb-2">
            <h5>Select Payment Type</h5>
            <div >
                <input class="radio-template" type="radio" name="paymenttype" id="exampleRadios1" value="Bank Transfer" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Bank transfer
                </label>
              </div>
              <div>
                <input class="radio-template" type="radio" name="paymenttype" id="exampleRadios2" value="Online Payment">
                <label class="form-check-label" for="exampleRadios2">
                  Online Payment
                </label>
              </div>
          </div>
<div class="text-center">
    <button type="submit" class="btn btn-primary text-center">Add Project</button>
</div>

      </form>

@endsection
