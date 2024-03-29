@csrf
<input type="text" hidden id="member_id" name="member_id" value="{{ $member->id }}" >
<div class="form-row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="small mb-1" for="type">Transaction Type</label>
            <select class="form-control @error('type') is-invalid @enderror" name="type">  
                <option value="@isset($contribution) {{trim($contribution->type) }} @endisset"> @if(isset($contribution)) {{ trim($contribution->type) }} @else Select a Transaction Type @endif  </option>
                @foreach ($contributionTypes as $contributionType)
                <option value="{{ $contributionType }}">{{ $contributionType}}</option>
                @endforeach
              
                
              </select>   
            @error('type')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="payment_reference">Payment Reference</label>
            <input class="form-control @error('payment_reference') is-invalid @enderror" name="payment_reference"
                id="payment_reference" type="text" placeholder="Enter  name" 
                value="{{old('payment_reference') }} @isset($contribution){{trim($contribution->payment_reference)}}@endisset" />
            @error('payment_reference')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div> 

<div class="form-group">
    <label class="small mb-1" for="bank_name">Bank</label>
    <select class="form-control @error('bank_name') is-invalid @enderror" name="bank_name">  
        <option value="@isset($contribution) {{trim($contribution->bank_name) }} @endisset"> @if(isset($contribution)) {{ trim($contribution->bank_name) }} @else Select a Bank @endif  </option>
        @foreach ($banks as $bank)
        <option value="{{ $bank }}">{{ $bank}}</option>
        @endforeach
      
        
      </select>   
    @error('bank_name')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label class="small mb-1" for="amount">Amount</label>
    <input  class="form-control @error('amount') is-invalid @enderror" name="amount"
        id="amount" type="text" placeholder="Enter  Amount"   
        value="@isset($contribution){{trim($contribution->amount)}}@endisset" />
    @error('amount')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label class="small mb-1" for="dob">Date Of Payment</label>
    <input class="form-control @error('payment_date') is-invalid @enderror" name="payment_date" id="payment_date" type="text"
       placeholder="EnterPayment Date"
       value="{{ old('payment_date') }} @isset($contribution){{ $contribution->payment_date }}@endisset" onfocus="(this.type='date')"
       onblur="(this.type='text')" />
    @error('payment_date')
    <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
 </div>
<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-bg btn-block text-white"
        type="submit">Submit Transaction</button></div>