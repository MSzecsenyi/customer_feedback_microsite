<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function IssueIndex($companyId)
    {
        if ($companyId == 'cordia'){
            $color = 'yellow';
            $image = 'https://www.bauapp.com/wp-content/uploads/2020/10/cordiablack1-300x70.png';
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
            $image = 'https://dekpol.pl/wp-content/uploads/2018/09/logo_dekpol_pl.svg';
            $companyname = 'Dekpol';
            $projects = Collection::make(['7R Park Szczecin', 'Budowa hali Panattoni w Opacz', 'Będzieszyn LPP', 'Rokitki 7', 'UNIQ TCZEW']);
        }

        return view('issue', compact('color', 'image', 'companyname','projects'));
    }

    public function storeIssue($companyId)
    {


        return redirect()->route('home', ['companyId' => strtolower($companyId)])->with('msg', 'Hiba bejelentése sikeres volt');
    }

}
