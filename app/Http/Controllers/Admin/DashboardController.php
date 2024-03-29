<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use  App\Utilities\Lists;
use \stdClass;

class DashboardController extends Controller
{
    //
    public function index()
    {
      $lists = new Lists;

      $user = User::find(Auth::user()->id);
      $member = Member::where('member_user_id', '=', $user->id)->first();  
      $tenantId = $member->tenant_id;      

       if ($user->hasAnyRole('admin')) {
            $memberTaskss = $lists -> TasksByMemberTenant($tenantId);
            $memberDocuments = $lists -> documentsByTenantAndDocumentId($tenantId);
            $members =  $lists->totalMemberss($tenantId);
            $activeMembers =   $lists->totalActiveMembersByTenant($tenantId);
            $pendingMembers =   $lists->totalMembersPendingByTenant($tenantId);
            $deactivatedMembers =   $lists->totalMembersDeactivatedByTenant($tenantId);
            $suspendedMembers =   $lists->totalMembersSuspendedByTenant($tenantId);
            $notes =    $lists->totalNotes();
            $contributions = $lists->totalContributionsByTenant($tenantId);
            $memberTasks =  $lists->totalMemberTasks();
            $LatePayment =  $lists->totalLateContributionsByTenant($tenantId);
            $totContributions =  $lists->totalContributionByTenant2($tenantId);
            $nonePayment =  $lists->totalNonePaymentByTenant($tenantId);
            $registrationFee =  $lists->totalRegistrationFeeByTenant($tenantId);
            $adminFee =  $lists->totalAdministrationFeeByTenant($tenantId);

            $memberData = DB::select(DB::raw("SELECT COUNT(*) AS number_count, status FROM members group by STATUS"));

            $chartData = Member::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("status"))
                ->pluck('count');
            // dd($memberData);


            //dd($totalContribution);
            return view('dashboard.index')->with(compact('members', 'contributions', 'activeMembers', 'notes', 'memberData','memberTasks', 'pendingMembers','deactivatedMembers','suspendedMembers','LatePayment','totContributions','nonePayment','registrationFee','adminFee','memberDocuments','memberTaskss'));
        }
        elseif ($user->hasAnyRole('Member')) {
            return redirect(RouteServiceProvider::USER_HOME);

        }
        else{  
            return redirect('user/members/create');
        }
    }


    public function getmemberData()
    {
        //

        $memberData = DB::select(DB::raw("SELECT COUNT(*) AS number_count, status FROM members group by STATUS"));


        return json_encode($memberData);
    }

    public function getMemberCategory()
    {
        //

        $memberDataCategory = DB::select(DB::raw("SELECT COUNT(*) AS cnt, member_type as category FROM members group by member_type"));


        return json_encode($memberDataCategory);
    }

    public function getMemberbyProvince()
    {
        //

        $memberByProvince = DB::select(DB::raw("SELECT COUNT(*) AS cntProvince, province as province FROM members group by province"));


        return json_encode($memberByProvince);
    }

    // utilities functions


}
