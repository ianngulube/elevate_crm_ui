@csrf
<input type="text" hidden id="member_id" name="member_id" value="{{ $member->id }}" >
<input type="text" hidden id="beneficiary_gender" name="beneficiary_gender" value="NA" >
<input type="text" hidden id="beneficiary_address" name="beneficiary_address" value="NA" >
<div class="form-row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="small mb-1" for="beneficiary_firstname">Firstname</label>
            <input class="form-control @error('beneficiary_firstname') is-invalid @enderror" name="beneficiary_firstname"
                id="beneficiary_firstname" type="text" placeholder="Enter  name" 
                value="{{old('beneficiary_firstname') }} @isset($contribution){{trim($beneficiary->beneficiary_firstname)}}@endisset" />
            @error('beneficiary_firstname')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="beneficiary_surname">Surname</label>
            <input class="form-control @error('beneficiary_surname') is-invalid @enderror" name="beneficiary_surname"
                id="beneficiary_surname" type="text" placeholder="Enter  Surname" 
                value="{{old('beneficiary_surname') }} @isset($contribution){{trim($beneficiary->beneficiary_surname)}}@endisset" />
            @error('beneficiary_surname')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="beneficiary_relationship">Relationship</label>
            <select class="form-control @error('beneficiary_relationship') is-invalid @enderror" name="beneficiary_relationship">  
                <option value="@isset($beneficiary_relationship) {{trim($beneficiary->bank_name) }} @endisset"> @if(isset($beneficiary)) {{ trim($beneficiary->bank_name) }} @else Select reletionship @endif  </option>
                @foreach ($relationships as $relationship)
                <option value="{{ $relationship }}">{{ $relationship}}</option>
                @endforeach   
              </select>   
            @error('bank_name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="beneficiary_contact">Contact Number</label>
            <input class="form-control @error('beneficiary_contact') is-invalid @enderror" name="beneficiary_contact"
                id="beneficiary_contact" type="text" placeholder="Enter  Number" 
                value="{{old('beneficiary_contact') }} @isset($beneficiary){{trim($beneficiary->beneficiary_contact)}}@endisset" />
            @error('beneficiary_contact')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="beneficiary_id_no">ID number</label>
            <input class="form-control @error('beneficiary_id_no') is-invalid @enderror" name="beneficiary_id_no"
                id="beneficiary_id_no" type="text" placeholder="Enter  name" 
                value="{{old('beneficiary_id_no') }} @isset($beneficiary){{trim($beneficiary->beneficiary_id_no)}}@endisset" />
            @error('beneficiary_id_no')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="dob">Date Of Birth</label>
            <input class="form-control @error('beneficiary_dob') is-invalid @enderror" name="beneficiary_dob" id="beneficiary_dob" type="text"
               placeholder="Enter date of birth"
               value="{{ old('beneficiary_dob') }} @isset($beneficiary){{ $beneficiary->beneficiary_dob }}@endisset" onfocus="(this.type='date')"
               onblur="(this.type='text')" />
            @error('beneficiary_dob')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
         </div>

         
    <div class="form-group">
        <label class="small mb-1" for="beneficiary_email">Email</label>
        <input class="form-control @error('beneficiary_email') is-invalid @enderror" name="beneficiary_email"
            id="beneficiary_email" type="email" placeholder="Enter  email" 
            value="{{old('beneficiary_email') }} @isset($beneficiary){{trim($beneficiary->beneficiary_email)}}@endisset" />
        @error('beneficiary_email')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </div>

</div>



</div> 



<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-bg btn-block text-white"
        type="submit">Submit Details</button></div>