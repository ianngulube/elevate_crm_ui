<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BankAccount;

class BankAcountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function createBankAccount($id)
    {
        //

        $accountTypes  = [
            'Cheque',
            'Savings',
            'Transmission',
            'Other'
          

        ];

        $banks  = [
            'Absa Bank Ltd',
            'African Bank Ltd',
            'Bidvest Bank Limited',
            'Capitec Bank Ltd',
            'FirstRand Bank Ltd',
            'Investec Bank Ltd',
            'Nedbank Group Limited',
            'Rand Merchant Bank',
            'RMB Private Bank ',
            'Bank of Athens Limited',
            'Sasfin Bank Ltd',
            'Standard Bank of SA Ltd',
            'Wesbank',
            'GBS Mutual Bank',
            'VBS Mutual Bank'

        ];
      


        $member  = Member::find($id);
        $beneficiaries= $member->beneficiaries;
        return view('admin.bank-accounts.create')->with(compact('member','accountTypes','banks','beneficiaries'));
    }
    //

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'bank_name'=>'required',
            'account_number'=>'required',
            'type'=>'required',
            'branch_code'=>'required',
            'beneficiary_id'=>'required',
            'user_id'=>'required'
        ]);
        // if  validation  
       $contribution = BankAccount::create($request->except(['_token']));
      

      $request->session()->flash('success', 'You have successfully added a  bank account');
      return redirect(route('admin.members.show',$request->input('member_id')));
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
