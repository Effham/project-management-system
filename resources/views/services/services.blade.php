@extends('layouts.app')
@section('content')
<div class="container">
    <hr>
    <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createclientmodal">Create New Service</button>

    </div>
    <h1>All Services</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Serial No</th>
        <th scope="col">Service Name</th>
        <th>Delete Service</th>
        <th>Edit Service</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($services as $service)
        <tr>
            <th>{{$service->id}}</th>
            <td>{{$service->name}}</td>
            <td>

                <form  method="POST" action="{{route('services.destroy',$service->id)}}">
                    @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="btn btn-md btn-danger" value="DELETE">
                </form>
                {{-- <form action="{{route('clients.destroy',$client->id)}}" method="DELETE">
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Delete">

                </form> --}}
            </td>
            <td>
                <a class="btn btn-md btn-warning" href="{{route('services.edit',$service->id)}}">Edit</a>
            </td>



          </tr>
        @endforeach
    </tbody>
  </table>
</div>
  @endsection

  <div class="modal fade" id="createclientmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('services.store')}}">
                <div class="form-group">
                    {{ csrf_field() }}
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Client Name">
                </div>


        </div>
    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save Service</button>
              </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




