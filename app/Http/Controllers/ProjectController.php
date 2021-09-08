<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Client;
use App\Project;
use PDF;
use Carbon\Carbon;
class ProjectController extends Controller
{
    public function what()
    {
        return dd(Project::all());
    }
    public function index($id)
    {
        $client = Client::findOrFail($id);


        $services = Service::all();
        return view('projects.createprojects',compact('services','client'));
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        $client_projects = Project::where('client_id',$id)->get();
        return view('projects.viewprojects',compact('client_projects','client'));
    }
    public function showall()
    {

        $client_projects = Project::paginate(5);
        $cp=Project::all();
        $totalProjects = count($cp);
        return view('projects.allprojects',compact('client_projects','totalProjects'));
    }

    public function create(Request $request)

    {
        // $service[] = implode(',' , $request->services);
        $project = new Project;
        $project->domainname = $request->domainname;
        $project->services = implode(',' , $request->services);
        $project->totalcost = $request->totalcost;
        $project->advancecost = $request->advancecost;
        $remaingcost=$request->totalcost- $request->advancecost;
        $project->remainingcost=$remaingcost;
        $project->status="To Be Paid";
        $project->client_id = $request->client_id;
        $project->paymenttype = $request->paymenttype;
        $project->save();
        return redirect('/create/project/'.$request->client_id);


        //Adding services to a string



         //Adding Radio Buttons
        //  $radio = $request->exampleRadios;
        //  dd($radio);


    //
    }
    public function status($id)
    {
        $project = Project::find($id);
        $project->status = "Paid";
        $project->remainingcost=0;
        $project->save();
        return redirect("/projects");
    }

    public function downloadPDF($id)
    {
        $show = Project::find($id);
        $client = Client::find($show->client_id);
        $services = (explode(',',$show->services));
        $pdf = PDF::loadView('pdf-invoice', compact('show','client','services'));
        return $pdf->download('invoice.pdf');
    }


}
