@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="container-fluid mb-2 mt-2">
      <h1 class="h3 no-margin-bottom">Client<div class="float-right no-margin-bottom"><button  type="button" data-toggle="modal" data-target="#myModal" class="mb-0 btn btn-primary">Add New Client</button></h1>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="block margin-bottom-sm">
      <div class="title"><strong>All Clients</strong></div>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Client Name</th>
                <th scope="col">Client Email</th>
                <th scope="col">Client Phone No</th>
                <th>Add Project</th>
                <th>Edit Client</th>
                <th>Delete Client</th>

              </tr>
          </thead>
          <tbody>
            @foreach ($clients as $client)
            <tr>
                <th>{{$client->id}}</th>
                <td><a href="/client/{{$client->id}}/projects">{{$client->name}}</a></td>
                <td>{{$client->email}}</td>
                <td>{{$client->phno}}</td>
                <td><a href="/create/project/{{$client->id}}" class="btn btn-sm btn-secondary">Create Project</a></td>

                <td>
                    <a class="btn btn-sm btn-primary" href="{{route('clients.edit',$client->id)}}">Edit</a>
                </td>
                <td>

                    <form  method="POST" action="{{route('clients.destroy',$client->id)}}">
                        @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-sm btn-danger" value="DELETE">
                    </form>
                    {{-- <form action="{{route('clients.destroy',$client->id)}}" method="DELETE">
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Delete">

                    </form> --}}
                </td>

              </tr>
            @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div>





  {{-- Modal --}}
  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Add A Client</strong>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('clients.store')}}">
                <div class="form-group">
                    {{ csrf_field() }}
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Client Name">
                </div>
                <div class="form-group">

                  <input type="text" class="form-control" name="email" placeholder="Enter Client Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phno" placeholder="Enter Client Phone No">
                  </div>

        </div>
    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save Client</button>
              </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
