@csrf
<input type="text" hidden id="beneficiary_id" name="beneficiary_id" value="{{ $beneficiary->id }}" >
<input type="text" hidden id="user_id" name="user_id" value="{{ Auth::user()->id }}" >
<div class="form-row">
    <!-- 
       '',
    'payment_date',
    '',

 
    'amount'  
    -->
    <div class="col-md-12">
        <div class="form-group">
            <label class="small mb-1" for="type">Payment Type</label>
            <select class="form-control @error('type') is-invalid @enderror" name="type">  
                <option value="@isset($payment) {{trim($payment->type) }} @endisset"> @if(isset($payment)) {{ trim($payment->type) }} @else Select a Payment Type @endif  </option>
                @foreach ($paymentTypes as $paymentType)
                <option value="{{ $paymentType }}">{{ $paymentType}}</option>
                @endforeach
              
                
              </select>   
            @error('type')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="payment_reason">Payment Reason</label>
            <select class="form-control @error('payment_reason') is-invalid @enderror" name="payment_reason">  
                <option value="@isset($payment) {{trim($payment->payment_reason) }} @endisset"> @if(isset($payment)) {{ trim($payment->payment_reason) }} @else Select a Payment Reason @endif  </option>
                @foreach ($paymentReasons as $paymentReason)
                <option value="{{ $paymentReason }}">{{ $paymentReason}}</option>
                @endforeach
              
                
              </select>   
            @error('payment_reason')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="reference">Payment Reference</label>
            <input class="form-control @error('reference') is-invalid @enderror" name="reference"
                id="reference" type="text" placeholder="Enter  reference" 
                value="{{old('reference') }} @isset($payment){{trim($payment->reference)}}@endisset" />
            @error('reference')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div> 

<div class="form-group">
    <label class="small mb-1" for="bank_account_id">Bank</label>
    <select class="form-control @error('bank_account_id') is-invalid @enderror" name="bank_account_id">  
        <option value="@isset($payment) {{trim($payment->bank_account_id) }} @endisset"> @if(isset($payment)) {{ trim($payment->bank_name) }} @else Select a Bank @endif  </option>
        @foreach ($banks as $bank)
        <option value="{{$bank->id }}">{{ $bank->bank_name. ' ['.$bank->account_number.' ]' }}</option>
        @endforeach
      
        
      </select>   
    @error('bank_account_id')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label class="small mb-1" for="amount">Amount</label>
    <input  class="form-control @error('amount') is-invalid @enderror" name="amount"
        id="amount" type="text" placeholder="Enter  Amount"   
        value="@isset($payment){{trim($payment->amount)}}@endisset" />
    @error('amount')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label class="small mb-1" for="dob">Date Of Payment</label>
    <input class="form-control @error('payment_date') is-invalid @enderror" name="payment_date" id="payment_date" type="text"
       placeholder="EnterPayment Date"
       value="{{ old('payment_date') }} @isset($payment){{ $payment->payment_date }}@endisset" onfocus="(this.type='date')"
       onblur="(this.type='text')" />
    @error('payment_date')
    <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
 </div>
<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block"
        type="submit">Submit</button></div>