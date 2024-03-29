<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\OpportunityCategory;

class PageController extends Controller
{
    //
    public  function community(){

        $categories  = OpportunityCategory::all();

       return view('community.index')->with(compact('categories'));
    }

    public  function settings(){

        

       return view('admin.settings.index');
    }
}
