@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="container-fluid mb-2 mt-2">
      <h1 class="h3 no-margin-bottom">Services<div class="float-right no-margin-bottom"><button  type="button" data-toggle="modal" data-target="#createclientmodal" class="mb-0 btn btn-primary">Add New Service</button></h1>
    </div>
  </div>
  @if ($errors->any())

<div class="container block">

    <h1>All Services</h1>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Serial No</th>
            <th>Service Name</th>
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
                    <input type="submit" class="btn btn-sm btn-danger" value="DELETE">
                    </form>
                    {{-- <form action="{{route('clients.destroy',$client->id)}}" method="DELETE">
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Delete">

                    </form> --}}
                </td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{route('services.edit',$service->id)}}">Edit</a>
                </td>



              </tr>
            @endforeach
        </tbody>
      </table>


</div>
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
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Service Name">
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




