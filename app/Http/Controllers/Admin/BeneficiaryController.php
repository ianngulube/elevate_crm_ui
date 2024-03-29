<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use Illuminate\Http\Request;
use App\Models\Member;

class BeneficiaryController extends Controller
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
            'AUNT',
            'BROTHER',
            'BROTHER-IN-LAW',
            'CHILD',
            'COUSIN',
            'DAUGHTER',
            'DAUGHTER-IN-LAW',
            'FATHER',
            'FATHER-IN-LAW',
            'FIANCE',
            'GRAND CHILD',
            'GRAND DAUGHTER',
            'GRAND FATHER',
            'GRAND MOTHER',
            'GRANDSON',
            'MOTHER',
            'MOTHER-IN-LAW',
            'NEPHEW',
            'NIECE',
            'OTHER',
            'SECONDARY SPOUSE',
            'SISTER',
            'SISTER-IN-LAW',
            'SON',
            'SON-IN-LAW',
            'SPOUSE',
            'STEP CHILD',
            'STEP FATHER',
            'STEP MOTHER',
            'UNCLE'

        ];
        $member  = Member::find($id);
        return view('admin.beneficiaries.create')->with(compact('member'));
    }

    public function createBeneficariary($id)
    {
        //

        $relationships  = [
            'AUNT',
            'BROTHER',
            'BROTHER-IN-LAW',
            'CHILD',
            'COUSIN',
            'DAUGHTER',
            'DAUGHTER-IN-LAW',
            'FATHER',
            'FATHER-IN-LAW',
            'FIANCE',
            'GRAND CHILD',
            'GRAND DAUGHTER',
            'GRAND FATHER',
            'GRAND MOTHER',
            'GRANDSON',
            'MOTHER',
            'MOTHER-IN-LAW',
            'NEPHEW',
            'NIECE',
            'OTHER',
            'SECONDARY SPOUSE',
            'SISTER',
            'SISTER-IN-LAW',
            'SON',
            'SON-IN-LAW',
            'SPOUSE',
            'STEP CHILD',
            'STEP FATHER',
            'STEP MOTHER',
            'UNCLE'

        ];
        $member  = Member::find($id);
        return view('admin.beneficiaries.create')->with(compact('member','relationships'));
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

        'beneficiary_firstname'=>'required',
        'beneficiary_surname'=>'required',
        'beneficiary_contact'=>'required',
        'beneficiary_id_no'=>'required',
        'beneficiary_address'=>'required',
        'beneficiary_dob'=>'required',
        'beneficiary_gender'=>'required',
        'beneficiary_email'=>'required',
        'beneficiary_relationship'=>'required',
        'member_id'=>'required'   

        ]);
        // if  validation  
       $beneficiary = Beneficiary::create($request->except(['_token']));
      

      $request->session()->flash('success', 'You have successfully a beneficiary to Member');
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
