<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contribution;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Utilities\Lists;

class ContributionController extends Controller
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
    public function create($id)
    {
        //
        $banks  = [
            'Absa Bank Ltd',
            'African Bank Ltd',
            'Bidvest Bank Limited',
            'Capitec Bank Ltd',
            'FirstRand Bank Ltd',
            'Investec Bank Ltd',
            'Mercantile Bank Limited',
            'Nedbank Group Limited',
            'Rand Merchant Bank',
            'RMB Private Bank ',
            'Bank of Athens Limited',
            'Sasfin Bank Ltd',
            'Standard Bank of SA Ltd',
            'Wesbank',
            'VBS Mutual Bank'
        ];
        $member  = Member::find($id);
        return view('admin.contributions.create')->with(compact('member'));
    }


    public function createPayment($id)
    {
        //
        $contributionTypes =[
            'Administration Fee',
            'Contribution',
            'Penalty - Late Payment',
            'Penalty - None Payment',
            'Premium',
            'Registration Fee'

        ];
        $banks  = [
            'Absa Bank Ltd',
            'African Bank Ltd',
            'Bidvest Bank Limited',
            'Capitec Bank Ltd',
            'FirstRand Bank Ltd',
            'Investec Bank Ltd',
            'Mercantile Bank Limited',
            'Nedbank Group Limited',
            'Rand Merchant Bank',
            'RMB Private Bank ',
            'Bank of Athens Limited',
            'Sasfin Bank Ltd',
            'Standard Bank of SA Ltd',
            'Wesbank',
            'VBS Mutual Bank'
        ];
        $member  = Member::find($id);
        return view('admin.contributions.create')->with(compact('banks','member','contributionTypes'));
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
        $request->validate([
            'amount' => 'required|max:22|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'payment_date'=>'required',
            'payment_reference'=>'required',
            'bank_name'=>'required',
            'member_id'=>'required',
            'type'=>'required'

        ]);
        // if  validation
       $contribution = Contribution::create($request->except(['_token']));
       $member = Member::find($request->input('member_id'));
       $notify = new Lists;
       $notify->sendSMSOnContributionEntry($member,$contribution);


      $request->session()->flash('success', 'You have successfully added reference  to Member');
      $request->session()->flash('success', 'Contribution notification has  been  sent  to Member');
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
