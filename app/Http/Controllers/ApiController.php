<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Utilities\Lists;
use \stdClass;

class ApiController extends Controller
{

    public  function getMembersByMonthThisYear(){
        $lists = new Lists;
        $totalMembersThisYear = $lists->totalMembersThisYear();
        $mo = [];
        $no = [];
        $memberStats  = new stdClass();
        foreach( $totalMembersThisYear as $i => $i_value) {
            $mo[$i] =  $i_value->monthJoined;
            $no[$i] =  $i_value->numberOfMembersInMonth;
        }
        $memberStats->Mo = $mo;
        $memberStats->No = $no;

        return json_encode($memberStats);

    }

    public  function totalContributionsThisYear(){
        $lists = new Lists;
        $totalMembersThisYear = $lists->totalContributionsThisYear();
        $mo = [];
        $no = [];
        $contributionStats  = new stdClass();
        foreach( $totalMembersThisYear as $i => $i_value) {
            $mo[$i] =  $i_value->contributionMonth;
            $no[$i] =  $i_value->totalContributionsInMonth;
        }
        $contributionStats->Mo = $mo;
        $contributionStats->No = $no;

        return json_encode($contributionStats);

    }
}
