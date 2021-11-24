<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Issue;
use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function IssueIndex($companyId, $projectId = null)
    {
        $data = Company::with('projects')->FindOrFail($companyId);
        $background = $data->company_image;
        $selected_project =['name'=>'Wybierz projekt', 'id'=>''];

        if($projectId != null){
            if($data->projects->contains($projectId)){
                $focused_project = Project::findOrFail($projectId);
                if($focused_project->project_image != null){
                    $background = $focused_project->project_image;
                }
                $selected_project = ['name'=>$focused_project->project_name, 'id'=>$projectId];
                $data->projects = $data->projects->where('id','!=',$projectId);
            }
            else{

                abort(404);
            }
        }

        return view('issue', compact('data', 'background', 'selected_project'));
    }

    public function storeIssue(Request $request)
    {
        $max_company = Company::count();
        $projects = Project::where('company_id',$request->company_id)->pluck('id');

        $data = $request->validate([
            'company_id' => 'integer|required|min:1|max:'.$max_company,
            'project' => 'required|in:'.$projects,
            'first_name' => 'required|string|max:255',
             'last_name' => 'required|string|max:255',
             'email' => 'required|email',
            'location' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ],
        [
            'required' => 'A mező megadása kötelező',
            'integer' => 'Csak számot lehet ide írni',
            'max' => 'A szöveg hossza maximum :max karakter lehet'
        ]);

        $input = new Issue();
        $input->company_id = $request->company_id;
        $input->project_id = $request->project;
        $input->issuer_ip = $request->ip();
        $input->first_name = $request->first_name;
        $input->last_name = $request->last_name;
        $input->description = $request->description;
        $input->email = $request->description;
        $input->location = $request->location;
        $input->save();

        return redirect()->route('home', ['companyId' => $request->company_id])->with('msg', 'Hiba bejelentése sikeres volt');
    }

}
