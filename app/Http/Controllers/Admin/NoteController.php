<?php

namespace App\Http\Controllers\Admin;

use App\Models\Note;
use App\Models\Member;
use App\Utilities\Lists;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
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

        $member  = Member::find($id);
        return view('admin.notes.create')->with(compact('member'));
    }

    public function  createNote($id)
    {
        //

        $member  = Member::find($id);
        return view('admin.notes.create')->with(compact('member'));
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

            'description'=>'required'


        ]);
        // if  validation
        $note = new Note;
        $note->description = $request->input('description');
        $note->user_id = $request->input('user_id');
        $note->member_id = $request->input('member_id');
        $note->save();
        $notify = new Lists;
        $member = Member::find( $note->member_id);
        $notify->sendSMSOnNoteCreation($member,$note);

      $request->session()->flash('success', 'You have successfully added a  note  to Member');
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
