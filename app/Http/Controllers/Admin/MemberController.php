<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use App\Models\Contribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Sms;
use App\Utilities\Lists;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $member = Member::where('member_user_id', '=', $user->id)->first();  
        $tenantId = $member->tenant_id;  

        $members =   Member::all();
        $members = Member::all()->where('tenant_id','=', $tenantId);

        $lists = new Lists;

        $totalMembersActive =  $lists->totalActiveMembersByTenant($tenantId);
        $totalMembersPending =  $lists->totalMembersPendingByTenant($tenantId);
        $totalMembersDeactivated =  $lists->totalMembersDeactivatedByTenant($tenantId);
        $totalMembersSuspended =  $lists->totalMembersSuspendedByTenant($tenantId);

        return view('admin.members.index')->with(compact('members',
                                                        'totalMembersActive',
                                                        'totalMembersPending'  ,
                                                        'totalMembersDeactivated'  ,
                                                        'totalMembersSuspended'
                                                        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $titles = [
            'Mr.','Mrs.','Ms.','Miss','Prof.', 'Dr.'

        ];

        $genders = [
            'Savings',
'Transfer from another bank account',
'Transfer from another FSP',
'Business income/profits',
'Salary/bonus/income',
'Investments',
'Sale of property',
'Inheritance, gift or donation',
'Asset swap',
'Winnings',
'Account transfer from another FSP',
'Trust donor',
'Employers pension fund',
'Pension interest in a divorce order',
'Retirement annuity fund',
'Preservation fund',
'Credit',
'Passive income (rental, dividends, interest)',
'Insurance payments',
'Child/spousal support payments',
'Tax refund',
'Other third party',
'Other'

        ];

        $maritalStatuses = [
            'Alive','Deceased'

        ];

        $memberTypes = [
            'CAT 1',
            'CAT 2',
            'CAT 3',
            'CAT 4',
            'CAT 5',
            'Funders',
            'Owners'

        ];
        $statuses = [
            'Active','Deactivated','Suspended','Pending'

        ];

        $professions = [
            'Individual',
            'Company',
            'Trust',
            'Club',
            'Stokvel'


        ];

        $provinces = [
'Ekurhuleni - Alberton',
'Ekurhuleni - Bedfordview',
'Ekurhuleni - Benoni',
'Ekurhuleni - Boksburg',
'Ekurhuleni - Brakpan',
'Ekurhuleni - Edenvale',
'Ekurhuleni - Germiston',
'Ekurhuleni - Heidelberg',
'Ekurhuleni - Kempton Park',
'Ekurhuleni - Nigel',
'Ekurhuleni - Springs',
'Sedibeng - Meyerton',
'Sedibeng - Sebokeng',
'Sedibeng - Vaal River and Dam',
'Sedibeng - Vanderbijlpark',
'Sedibeng - Vereeniging',
'Tshwane - Bronkhorstspruit',
'Tshwane - Brooklyn',
'Tshwane - Centurion',
'Tshwane - Cullinan',
'Tshwane - Dinokeng',
'Tshwane - Hammanskraal',
'Tshwane - Lynnwood',
'Tshwane - Mamelodi',
'Tshwane - Midrand',
'Tshwane - Pretoria',
'West Rand - Krugersdorp',
'West Rand - Magaliesburg',
'West Rand - Muldersdrift',
'West Rand - Randfontein',
'West Rand - Westonaria',
'Johannesburg - Bryanston',
'Johannesburg - Fourways',
'Johannesburg - Johannesburg',
'Johannesburg - Kensington',
'Johannesburg - Northcliff',
'Johannesburg - Randburg',
'Johannesburg - Roodepoort',
'Johannesburg - Sandton',
'Johannesburg - Soweto'

        ];



        return view('admin.members.create')->with(compact('titles','genders','maritalStatuses','memberTypes','statuses','professions','provinces'));
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
        $member = Member::create($request->except(['_token']));
         $member->membership_number='EL-' . str_pad($member->id, 4, "0", STR_PAD_LEFT);
         $member->save();


        $request->session()->flash('success', 'You have successfully created a new  Member');
        return redirect(route('admin.members.index'));
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
        $member =   Member::find($id);


       /* $contributions = DB::table('contributions')
                ->where('member_id', '=', $member->id)
                ->get(); */
        $contributions = $member->contributions;
        $contributionsSum = $member->contributions->sum('amount');
        $totalContribution = $member->contributions->where('type','Contribution')->sum('amount');	
        $totalLatePayment = $member->contributions->where('type','Penalty - Late Payment')->sum('amount'); 
        $totalNonePayment = $member->contributions->where('type','Penalty - None Payment')->sum('amount');
        $totalRegistrationFee = $member->contributions->where('type','Registration Fee')->sum('amount'); 
        $totalAdministrationFee = $member->contributions->where('type','Administration Fee')->sum('amount'); 
		
		
		
		
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



        return view('admin.members.show')->with(compact(
                                                    'member',
                                                    'contributions',
                                                    'notes',
                                                    'documents',
                                                    'beneficiaries',
                                                    'beneficiaryAccounts',
                                                    'cashflows',
                                                    'cashflowsSum',
                                                    'contributionsSum',
                                                    'tasks',
                                                    'smses',
                                                    'totalContribution',
                                                    'totalLatePayment',
                                                    'totalNonePayment',
                                                    'totalRegistrationFee',
                                                    'totalAdministrationFee'));
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


        $titles = [
            'Mr.','Mrs.','Ms.','Miss','Prof.', 'Dr.'

        ];

        $genders = [
            'Savings',
            'Transfer from another bank account',
            'Transfer from another FSP',
            'Business income/profits',
            'Salary/bonus/income',
            'Investments',
            'Sale of property',
            'Inheritance, gift or donation',
            'Asset swap',
            'Winnings',
            'Account transfer from another FSP',
            'Trust donor',
            'Employers pension fund',
            'Pension interest in a divorce order',
            'Retirement annuity fund',
            'Preservation fund',
            'Credit',
            'Passive income (rental, dividends, interest)',
            'Insurance payments',
            'Child/spousal support payments',
            'Tax refund',
            'Other third party',
            'Other'

        ];

        $maritalStatuses = [
            'Alive','Deceased'

        ];

        $memberTypes = [
            'CAT 1',
            'CAT 2',
            'CAT 3',
            'CAT 4',
            'CAT 5',
            'Funders',
            'Owners'

        ];
        $statuses = [
            'Active','Deactivated','Suspended','Pending'

        ];

        $professions = [
            'Individual',
            'Company',
            'Trust',
            'Club',
            'Stokvel'
        ];

        $provinces = [
            'Eastern Cape',
            'Free State',
            'Gauteng',
            'KwaZulu-Natal',
            'Limpopo',
            'Mpumalanga',
            'Northern Cape',
            'North West'


        ];
        $member = Member::find($id);
        return view('admin.members.edit')->with(compact('member','titles','genders','maritalStatuses','memberTypes','statuses','professions','provinces'));
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
        $member = Member::find($id);
        if(!$member){
            $request->session()->flash('error', 'You cannot  edit this member');
            return redirect(route('admin.members.index'));
        }
        $member->update($request->except(['_token']));
        if($request->input('status')=="Active"){

            $function = new  Lists;

            $result = $function->sendSMSOnActive($member);

            if($result != '404'){
               // we  will do something here if needs be

            }

             else {
                $request->session()->flash('error', 'Failed to  send sms ');
            }

        }
         $request->session()->flash('success', 'You have successfully edited the member record');
         $request->session()->flash('success', 'An SMS has been sent to the  member notifying status change.');
        return redirect(route('admin.members.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $member  =  Member::destroy($id);
        $request->session()->flash('success', 'You have successfully deleted the Member record');
        return back();
    }

    // custom  user  built  functions
    public function selfCreate()
    {


        $titles = [
            'Mr.','Mrs.','Ms.','Miss','Prof.', 'Dr.', 'NA.'

        ];

        $genders = [
            'Savings',
'Transfer from another bank account',
'Transfer from another FSP',
'Business income/profits',
'Salary/bonus/income',
'Investments',
'Sale of property',
'Inheritance, gift or donation',
'Asset swap',
'Winnings',
'Account transfer from another FSP',
'Trust donor',
'Employers pension fund',
'Pension interest in a divorce order',
'Retirement annuity fund',
'Preservation fund',
'Credit',
'Passive income (rental, dividends, interest)',
'Insurance payments',
'Child/spousal support payments',
'Tax refund',
'Other third party',
'Other'

        ];

        $maritalStatuses = [
            'Alive','Deceased'

        ];

        $memberTypes = [
            'CAT 1',
            'CAT 2',
            'CAT 3',
            'CAT 4',
            'CAT 5',
            'Funders',
            'Owners'

        ];
        $statuses = [
            'Active','Deactivated','Suspended','Pending' ,'Cancelled' ,'Expired'

        ];

        $professions = [
            'Individual',
            'Company',
            'Trust',
            'Club',
            'Stokvel'
        ];

        $provinces = [
            'Eastern Cape',
            'Free State',
            'Gauteng',
            'KwaZulu-Natal',
            'Limpopo',
            'Mpumalanga',
            'Northern Cape',
            'North West'


        ];



        return view('user.members.create')->with(compact('titles','genders','maritalStatuses','memberTypes','statuses','professions','provinces'));
    }

    public function selfStore(Request $request)
    {
        //
        $member = new  Member;
        $member->title = $request->input('title');
        $member->firstname = $request->input('firstname');
        $member->surname = $request->input('surname');
        $member->dob = $request->input('dob');
        $member->firstname = $request->input('firstname');
        $member->gender = $request->input('gender');
        $member->cellphone_number = $request->input('cellphone_number');
        $member->member_type = $request->input('member_type');
        $member->email = $request->input('email');
        $member->city = $request->input('city');
        $member->province = $request->input('province');
        $member->status = "Pending";
        $member->member_user_id =  $request->input('user_id');

        $member->save();

        $member->membership_number='EL-' . str_pad($member->id, 4, "0", STR_PAD_LEFT);
        $member->save();
        $notify = new Lists;
        $notify->sendSMSOnPending($member);

        $request->session()->flash('success', 'You have successfully created a new  Member');
        return redirect(route('user.members.index',  $member->id));
    }
    

    public function selfIndex($id)
    {
        //
        $member =   Member::find($id);
        return view('user.members.index')->with(compact('member'));
    }

}
