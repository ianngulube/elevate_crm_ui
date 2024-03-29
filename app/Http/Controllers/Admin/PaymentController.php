<?php

namespace App\Http\Controllers\Admin;

use App\Models\Beneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Payment;

class PaymentController extends Controller
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

    public function createPayment($id)
    {

        $beneficiary  = Beneficiary::find($id);
        //

        $banks = DB::select('SELECT a.*
        from bank_accounts a
        inner  join beneficiaries b  on b.id=a.beneficiary_id       
        where b.id=? ', [$beneficiary->id]);

        $paymentReasons  = [
            'Claim',
            'Loan',
            'Dividend',
            'Rebate',
            'Refund',
            'Other'


        ];

        $paymentTypes  = [
            'EFT',
            'Cheque',
            'Cash',
            'Other'
        ];
   
        return view('admin.payments.create')->with(compact(
                                                            'banks',
                                                            'beneficiary',
                                                             'paymentTypes',
                                                            'paymentReasons'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bid = $request->input('beneficiary_id');
        $beneficiary =  Beneficiary::find($bid);
        $member =  $beneficiary->member;
       
        //
          //
          $request->validate([
            'amount' => 'required|max:22|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'reference' => 'required',
            'payment_date'=> 'required',
            'payment_reason'=> 'required',
            'type'=> 'required',
            'beneficiary_id'=> 'required',
            'bank_account_id'=> 'required',
            'user_id'=> 'required'
            

        ]);
        // if  validation  
       $contribution = Payment::create($request->except(['_token']));


      $request->session()->flash('success', 'You have successfully added a payment');
      return redirect(route('admin.members.show',$member->id));
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
