<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Member;
use App\Utilities\Lists;
use App\Models\MemberTask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class MemberTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Assuming Lists is a class or object that contains the other methods
        $lists = new Lists;
    
        $user = User::find(Auth::user()->id);
        $member = Member::where('member_user_id', '=', $user->id)->first();  
        $tenantId = $member->tenant_id;
    
        // Retrieve tasks based on the tenant ID
        $memberTasks = MemberTask::join('members', 'member_tasks.member_id', '=', 'members.id')
            ->where('members.tenant_id', $tenantId)
            ->get();
    
        // Other calculations or methods from Lists class...
        $totalMemberTasks =  $lists->totalMemberTasks();
        $totalMemberTasksNew =  $lists->totalMemberTasksNew();
        $totalMemberTasksInProgress =  $lists->totalMemberTasksInProgress();
        $totalMemberTasksClosed =  $lists->totalMemberTasksClosed();
    
        return view('admin.member-tasks.index')->with(compact(
            'totalMemberTasks',
            'totalMemberTasksNew',
            'totalMemberTasksInProgress',
            'totalMemberTasksClosed',
            'memberTasks'
        ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Retrieve the authenticated user
        $user = User::find(Auth::user()->id);
    
        // Retrieve the member associated with the authenticated user
        $member = Member::where('member_user_id', '=', $user->id)->first();
    
        // Get the tenant ID from the member
        $tenantId = $member->tenant_id;
    
        // Retrieve members belonging to the same tenant
        $membersQuery = Member::where('tenant_id', $tenantId);
    
        // Implement member search based on the input query
        $searchQuery = $request->input('search');
        if ($searchQuery) {
            $membersQuery->where('name', 'LIKE', '%' . $searchQuery . '%');
        }
    
        $members = $membersQuery->get();
    
        $statuses = Lists::taskStatuses();
        $priorities = Lists::taskPriorities();
        $taskTypes = Lists::taskTypes();
        $users = User::all();
    
        return view('admin.member-tasks.create')->with(compact('statuses', 'priorities', 'taskTypes', 'members', 'users'));
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
            'name'=>'required|max:255',


        ]);
        // if  validation
       $memberTask = MemberTask::create($request->except(['_token']));

       $member = Member::find($memberTask->member_id);
       $notify = new Lists;
       $notify->sendSMSOnCaseCreation($member,$memberTask);
       $request->session()->flash('success', 'You have successfully created the a Member Task');
       return redirect(route('admin.member-tasks.index'));
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
