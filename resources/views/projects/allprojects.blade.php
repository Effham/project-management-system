@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="container-fluid mb-2 mt-2">
      <h1 class="h3 no-margin-bottom">All Projects <div class="float-right">Total Projects {{$totalProjects}}</div> </h1>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="block margin-bottom-sm">
      <div class="title"><strong>Projects</strong></div>
      <div class="table-responsive">
        <table class="table table-striped">
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


                    <td><a class="btn btn-sm btn-primary" href="/project/{{$project->id}}/status">Pay Now</a></td>
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
        <div class="mt-3 d-flex justify-content-center">
            {{$client_projects->links()}}
        </div>

      </div>
    </div>
  </div>





  {{-- Modal --}}

@endsection
