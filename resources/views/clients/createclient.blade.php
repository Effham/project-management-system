@extends('layouts.app')
@section('content')
<div class="container">
    <hr>
    <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createclientmodal">Create New Client</button>

    </div>
    <h1>All Clients</h1>

<table class="table">
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
            <td><a href="/create/project/{{$client->id}}" class="btn btn-primary">Create Project</a></td>

            <td>
                <a class="btn btn-md btn-warning" href="{{route('clients.edit',$client->id)}}">Edit</a>
            </td>
            <td>

                <form  method="POST" action="{{route('clients.destroy',$client->id)}}">
                    @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="btn btn-md btn-danger" value="DELETE">
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
  @endsection

  <div class="modal fade" id="createclientmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
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




