<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function IssueIndex($id)
    {
        if ($id == 'cordia'){
            $color = 'yellow';
            $image = 'https://www.bauapp.com/wp-content/uploads/2020/10/cordiablack1-300x70.png';
            $companyname = 'Cordia';
        }
        elseif ($id == 'metrodom'){
            $color = 'green';
            $image = 'https://www.bauapp.com/wp-content/uploads/2020/10/metrodoom-300x126.png';
            $companyname = 'Metrodom';
        }
        elseif ($id == 'whb'){
            $color = 'red';
            $image = 'https://www.bauapp.com/wp-content/uploads/2020/10/WHB_Logo_RGB-600x358-1-300x179.png';
            $companyname = 'WHB';
        }

        return view('issue', compact('color', 'image', 'companyname'));
    }

}
