@extends('layouts.app')

@section('content')
<div class="container">
    <hr>

    <h1>All Projects for <strong>{{$client->name}}</strong></h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Serial No</th>
        <th scope="col"> Domain Name</th>
        <th>Services</th>
        <th>Total Cost</th>
        <th>Advance Cost</th>
        <th>Reamining Cost</th>
        <th>Status</th>
        <th>Payment Type</th>
        <th>Pay</th>
        <th>Invoice</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($client_projects as $project)
        <tr>
            <th>{{$project->id}}</th>
            <td> <a href="/project/{{$project->id}}/edit"> {{$project->domainname}}</a></td>
            <td>{{$project->services}}</td>
            <td>{{$project->totalcost}}</td>
            <td>{{$project->advancecost}}</td>
            <td>{{$project->remainingcost}}</td>
            <td>{{$project->status}}</td>
            <td>{{$project->paymenttype}}</td>


{{--
                <form  method="POST" action="{{route('services.destroy',$service->id)}}">
                    @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="btn btn-md btn-danger" value="DELETE">
                </form>
            </td>
            <td>
                <a class="btn btn-md btn-warning" href="{{route('services.edit',$service->id)}}">Edit</a>
            </td> --}}


            <td><a class="btn btn-sm btn-primary" href="#home">Pay Now</a></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Generate PDF
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/downloadPDF/{{$project->id}}">Pakistan</a>
                      <a class="dropdown-item" href="#">United Kingdom</a>
                    </div>
                  </div>
            </td>

            {{-- <td><a class="btn btn-sm btn-success" href="/downloadPDF/{{$project->id}}">Generate Invoice</a></td> --}}
          </tr>
        @endforeach
    </tbody>
  </table>
</div>


@endsection
