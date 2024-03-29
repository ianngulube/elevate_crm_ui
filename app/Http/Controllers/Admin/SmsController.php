<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Sms;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Utilities\Lists;

class SmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function sendSMS($id)
    {
        //

        $member  = Member::find($id);
        return view('admin.sms.create')->with(compact('member'));
    }

    public function index()
    {
        //
   
        $smses = Sms::all();
        return view('admin.leads.sms.index')->with(compact('smses'));
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

        $memberAnytime = Member::find($request->input('member_id'));
        $function = new  Lists;
        $result = $function->sendSMSOnAnytime($memberAnytime,$request->input('textMessage'));

        if($result != '404'){

            $request->session()->flash('success', 'You have successfully sent  an sms to  member');
            return redirect(route('admin.members.show',$request->input('member_id')));
        }

         else {
            $request->session()->flash('error', 'Failed to  send sms ');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function show(Sms $sms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function edit(Sms $sms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sms $sms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sms $sms)
    {
        //
    }

    public function leadsView()
    {

    }


}

