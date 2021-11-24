<?php

namespace App\Http\Controllers;

use App\Models\Company;
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

    public function storeIssue($companyId)
    {
        return redirect()->route('home', ['companyId' => strtolower($companyId)])->with('msg', 'Hiba bejelentése sikeres volt');
    }

}
