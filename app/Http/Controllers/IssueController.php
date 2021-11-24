<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function IssueIndex($companyId, $projectId = null)
    {
        if ($companyId == 'cordia'){
            $color = 'yellow';
            $logo = 'https://www.bauapp.com/wp-content/uploads/2020/10/cordiablack1-300x70.png';
            $companyname = 'Cordia';
            $projects = Collection::make(['Project 1', 'Project 2', 'Project 3']);
        }
        elseif ($companyId == 'metrodom'){
            $color = 'green';
            $image = 'https://www.bauapp.com/wp-content/uploads/2020/10/metrodoom-300x126.png';
            $companyname = 'Metrodom';
            $projects = Collection::make(['Project 4', 'Project 5', 'Project 6']);
        }
        elseif ($companyId == 'whb'){
            $color = 'red';
            $image = 'https://www.bauapp.com/wp-content/uploads/2020/10/WHB_Logo_RGB-600x358-1-300x179.png';
            $companyname = 'WHB';
            $projects = Collection::make(['Project 7', 'Project 8', 'Project 9']);
        }
        elseif ($companyId == 'dekpol'){
            $color = 'blue';
            $logo = 'https://dekpol.pl/wp-content/uploads/2018/09/logo_dekpol_pl.svg';
            $companyname = 'Dekpol';
            $projects = Collection::make(['1' => '7R Park Szczecin','2' => 'Budowa hali Panattoni w Opacz','3' => 'Będzieszyn LPP','4' => 'Rokitki 7','5' => 'UNIQ TCZEW']);
        }

        $image = asset('Images/2.jpg');

        if($projectId != null){
            $defproject = $projects->pull($projectId);
            if($projectId == 1){
                $image = asset('Images/family_1.jpg');
            }
            elseif($projectId == 2){
                $image = asset('Images/family_2.jpg');
            }
            elseif($projectId == 3){
                $image = asset('Images/family_3.jpg');
            }
            elseif($projectId == 4){
                $image = asset('Images/family_4.jpg');
            }
        }
        elseif($projectId <= $projects->count()){
            $defproject = "Wybierz projekt";
        }
        else{
            abort(404);
        }




        return view('issue', compact('color', 'logo', 'companyname','projects', 'defproject', 'image'));
    }

    public function storeIssue($companyId)
    {


        return redirect()->route('home', ['companyId' => strtolower($companyId)])->with('msg', 'Hiba bejelentése sikeres volt');
    }

}
