@csrf
<input type="text" hidden id="member_id" name="member_id" value="{{ $member->id }}" >
<input type="text" hidden id="user_id" name="user_id" value="{{ Auth::user()->id }}" >

<div class="form-row">
    <div class="col-md-12">

        <div class="form-group">
            <label class="small mb-1" for="beneficiary_id">Related To</label>
            <select class="form-control @error('beneficiary_id') is-invalid @enderror" name="beneficiary_id">  
                <option value="@isset($bankAccount) {{trim($bankAccount->beneficiary_id) }} @endisset"> @if(isset($bankAccount)) {{ trim($bankAccount->beneficiary_id) }} @else Select Beneficiary @endif  </option>
                @foreach ($beneficiaries as $beneficiary)
                <option value="{{ $beneficiary->id }}">{{ $beneficiary->beneficiary_firstname.' '.$beneficiary->beneficiary_surname }}</option>
                @endforeach   
              </select>   
            @error('beneficiary_id')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="bank_name">Bank Name</label>
            <select class="form-control @error('bank_name') is-invalid @enderror" name="bank_name">  
                <option value="@isset($bankAccount) {{trim($bankAccount->bank_name) }} @endisset"> @if(isset($bankAccount)) {{ trim($bankAccount->bank_name) }} @else Select Bank @endif  </option>
                @foreach ($banks as $bank)
                <option value="{{ $bank }}">{{ $bank}}</option>
                @endforeach   
              </select>   
            @error('bank_name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="account_number">Account Number</label>
            <input class="form-control @error('account_number') is-invalid @enderror" name="account_number"
                id="account_number" type="text" placeholder="Enter Account Number" 
                value="{{old('account_number') }} @isset($bankAccount){{trim($bankAccount->account_number)}}@endisset" />
            @error('account_number')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="type">Account Type</label>
            <select class="form-control @error('type') is-invalid @enderror" name="type">  
                <option value="@isset($bankAccount) {{trim($bankAccount->type) }} @endisset"> @if(isset($bankAccount)) {{ trim($bankAccount->type) }} @else Select Account Type @endif  </option>
                @foreach ($accountTypes as $type)
                <option value="{{ $type }}">{{ $type}}</option>
                @endforeach   
              </select>   
            @error('type')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="branch_code">Branch Code</label>
            <input class="form-control @error('branch_code') is-invalid @enderror" name="branch_code"
                id="branch_code" type="text" placeholder="Enter  Branch Code" 
                value="{{old('branch_code') }} @isset($bankAccount){{trim($bankAccount->branch_code)}}@endisset" />
            @error('branch_code')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

       

        
         
    

</div>



</div> 



<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-bg btn-block text-white"
        type="submit">Submit Details</button></div>