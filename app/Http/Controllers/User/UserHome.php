<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Contribution;
use App\Models\Sms;
use App\Utilities\Lists;


class UserHome extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user  =  User::find(Auth::user()->id);
        $member = Member::where('member_user_id', '=', $user->id)->first();



        /* $contributions = DB::table('contributions')
                 ->where('member_id', '=', $member->id)
                 ->get(); */
         $contributions = $member->contributions;
         $contributionsSum = $member->contributions->sum('amount');

         
         $notes = $member->notes;
         $documents = $member->documents;
         $beneficiaries= $member->beneficiaries;

         $beneficiaryAccounts = DB::select('SELECT a.*,b.beneficiary_firstname,b.beneficiary_surname
         from bank_accounts a
         inner  join beneficiaries b  on b.id=a.beneficiary_id
         inner join members c  on  c.id=b.member_id
         where c.id=? ', [$member->id]);

         $cashflows = DB::select('SELECT a.*,b.beneficiary_firstname,b.beneficiary_surname,d.bank_name,d.account_number
         from payments a
         inner  join beneficiaries b  on b.id=a.beneficiary_id
         inner join members c  on  c.id=b.member_id
         inner  join  bank_accounts d  on d.id =  a.bank_account_id
         where c.id=? ', [$member->id]);

         $cashflowsSum = DB::select(' SELECT sum(amount) as total_cashflows from  (SELECT a.*,b.beneficiary_firstname,b.beneficiary_surname,d.bank_name,d.account_number
         from payments a
         inner  join beneficiaries b  on b.id=a.beneficiary_id
         inner join members c  on  c.id=b.member_id
         inner  join  bank_accounts d  on d.id =  a.bank_account_id
         where c.id=? ) X ', [$member->id]);


         $tasks = DB::select('SELECT a.*,b.name as  user_name
         from member_tasks a
         inner  join users b  on b.id=a.user_id
         inner join members c  on  c.id=a.member_id
         where c.id=? ', [$member->id]);

         $smses = DB::select('SELECT a.*,b.name as  user_name
         from sms a
         inner  join users b  on b.id=a.user_id
         inner join members c  on  c.id=a.member_id
         where c.id=? ', [$member->id]);


        return view('user.members.show1')->with(compact('user', 'member',
        'contributions',
        'notes',
        'documents',
        'beneficiaries',
        'beneficiaryAccounts',
        'cashflows',
        'cashflowsSum',
        'contributionsSum',
        'tasks',
        'smses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
