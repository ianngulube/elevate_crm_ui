<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document;

class DocumentController extends Controller
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
        $docTypes  = [
            'Beneficiary Nomination',
            'Birth Certificate',
            'Burial Order',
            'Claim Form',
            'Contract',
            'Death Certificate',
            'Debit Order Form',
            'Driving License',
            'ID Document',
            'Loan Application Form',
            'Medical Certificate',
            'Member Correspondence',
            'Membership Cancellation',
            'Membership Form',
            'Member Statement',
            'Defaulter Letter',
            'Passport',
            'Policy Form',
            'Proof of Banking',
            'Proof of Payment',
            'Proof of Residence'


        ];
        $member  = Member::find($id);
        return view('admin.documents.create')->with(compact('member','docTypes'));
    }

    public function createDocument($id)
    {
        //
        $docTypes  = [
            'AGM Letter',
            'Beneficiary Nomination',
            'Birth Certificate',
            'Burial Order',
            'Bank Statement',
            'Claim Form',
            'Contract',
            'Company Profile',
            'Death Certificate',
            'Debit Order Form',
            'Driving License',
            'ID Document',
            'Investor Appication Form',
            'Investor Profile Form',
            'Investor Terms & Conditions',
            'Loan Application Form',
            'Logo',
            'Medical Certificate',
            'Member Correspondence',
            'Membership Cancellation',
            'Membership Form',
            'Member Statement',
            'Meeting Minutes',
            'NDA',
            'Defaulter Letter',
            'Passport',
            'Proxy Form',
            'Policy Form',
            'Proof of Banking',
            'Proof of Payment',
            'Proof of Residence'
                        

        ];
        $member  = Member::find($id);
        return view('admin.documents.create')->with(compact('member','docTypes'));
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
        $this->validate($request, [

            'file' => 'required|mimes:pdf,xlsx,csv,jpg,png,gif,jpeg,JPEG|max:5000'

        ]);



        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('uploads'), $fileName);




        $doc = new Document;
        $doc->type =    $request->input('type');
        $doc->document_url =     $fileName ;
        $doc->user_id =    $request->input('user_id');
        $doc->member_id =    $request->input('member_id');
        $doc->save();

        $request->session()->flash('success', 'You have successfully added a document  to the  Member');
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
