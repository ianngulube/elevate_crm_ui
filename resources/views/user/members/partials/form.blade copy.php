@csrf
<div class="row">
   
    <div class="col-xl-3">
        <div class="form-group">
           <label class="small mb-1" for="title">Title</label>
           <select class="form-control @error('title') is-invalid @enderror" name="title">
              <option value="@isset($member) {{ trim($member->title) }} @endisset">
                 @if (isset($member)) {{ trim($member->title) }} @else Select a
                 Title @endif
              </option>
              @foreach ($titles as $title)
              <option value="{{ $title }}">{{ $title }}</option>
              @endforeach
           </select>
           @error('title')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="firstname">First Name</label>
           <input class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="firstname"
              type="text" placeholder="Enter  First Name"
              value="{{ old('firstname') }} @isset($member){{ trim($member->firstname) }}@endisset" />
           @error('firstname')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="surname">Surname</label>
           <input class="form-control @error('surname') is-invalid @enderror" name="surname" id="surname" type="text"
              placeholder="Enter Surname"
              value="{{ old('surname') }} @isset($member){{ trim($member->surname) }}@endisset" />
           @error('surname')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="dob">Date Of Birth</label>
           <input class="form-control @error('dob') is-invalid @enderror" name="dob" id="dob" type="text"
              placeholder="Enter Date Of Birth"
              value="{{ old('dob') }} @isset($member){{ $member->dob }}@endisset" onfocus="(this.type='date')"
              onblur="(this.type='text')" />
           @error('dob')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="id_number">ID Number</label>
           <input class="form-control @error('id_number') is-invalid @enderror" name="id_number" id="id_number"
              type="text" placeholder="Enter ID Number"
              value="{{ old('id_number') }} @isset($member){{ trim($member->id_number) }}@endisset" />
           @error('id_number')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="passport_number">Passport Number</label>
           <input class="form-control @error('passport_number') is-invalid @enderror" name="passport_number"
              id="passport_number" type="text" placeholder="Enter Password"
              value="{{ old('passport_number') }} @isset($member){{ trim($member->passport_number) }}@endisset" />
           @error('passport_number')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="cellphone_number">Cellphone Number</label>
           <input class="form-control @error('cellphone_number') is-invalid @enderror" name="cellphone_number"
              id="cellphone_number" type="text" placeholder="Enter Password"
              value="{{ old('cellphone_number') }} @isset($member){{ trim($member->cellphone_number) }}@endisset" />
           @error('cellphone_number')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
            <label class="small mb-1" for="gender">Gender</label>
            <select class="form-control @error('gender') is-invalid @enderror" name="gender">
               <option value="@isset($member) {{ trim($member->gender) }} @endisset">
                  @if (isset($member)) {{ trim($member->gender) }} @else Select
                  Gender @endif
               </option>
               @foreach ($genders as $gender)
               <option value="{{ $gender }}">{{ $gender }}</option>
               @endforeach
            </select>
            @error('gender')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
         </div>
  </div>      
          <div class="col-xl-3">
       
        <div class="form-group">
           <label class="small mb-1" for="marital_status">Marital Status</label>
           <select class="form-control @error('marital_status') is-invalid @enderror" name="marital_status">
              <option value="@isset($member) {{ trim($member->marital_status) }} @endisset">
                 @if (isset($member)) {{ trim($member->marital_status) }} @else
                 Select Marital Status @endif
              </option>
              @foreach ($maritalStatuses as $maritalStatus)
              <option value="{{ $maritalStatus }}">{{ $maritalStatus }}</option>
              @endforeach
           </select>
           @error('marital_status')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="marital_status">Category</label>
           <select class="form-control @error('member_type') is-invalid @enderror" name="member_type">
              <option value="@isset($member) {{ trim($member->member_type) }} @endisset">
                 @if (isset($member)) {{ trim($member->member_type) }} @else
                 Select Member Category @endif
              </option>
              @foreach ($memberTypes as $memberType)
              <option value="{{ $memberType }}">{{ $memberType }}</option>
              @endforeach
           </select>
           @error('member_type')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="marital_status">Status</label>
           <select class="form-control @error('status') is-invalid @enderror" name="status">
              <option value="@isset($member) {{ trim($member->status) }} @endisset">
                 @if (isset($member)) {{ trim($member->status) }} @else Select
                 Member Status @endif
              </option>
              @foreach ($statuses as $status)
              <option value="{{ $status }}">{{ $status }}</option>
              @endforeach
           </select>
           @error('status')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="gender">Profession</label>
           <select class="form-control @error('profession') is-invalid @enderror" name="profession">
              <option value="@isset($member) {{ trim($member->profession) }} @endisset">
                 @if (isset($member)) {{ trim($member->profession) }} @else
                 Select Profession @endif
              </option>
              @foreach ($professions as $profession)
              <option value="{{ $profession }}">{{ $profession }}</option>
              @endforeach
           </select>
           @error('profession')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="next_of_kin_firstname">Next Of Kin First Name</label>
           <input class="form-control @error('next_of_kin_firstname') is-invalid @enderror"
              name="next_of_kin_firstname" id="next_of_kin_firstname" type="text"
              placeholder="Enter NExt Of Kin First name"
              value="{{ old('next_of_kin_firstname') }} @isset($member){{ trim($member->next_of_kin_firstname) }}@endisset" />
           @error('next_of_kin_firstname')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="next_of_kin_surname">Next Of Kin Surname</label>
           <input class="form-control @error('next_of_kin_surname') is-invalid @enderror" name="next_of_kin_surname"
              id="next_of_kin_surname" type="text" placeholder="Enter NExt Of Kin Surname"
              value="{{ old('next_of_kin_surname') }} @isset($member){{ trim($member->next_of_kin_firstname) }}@endisset" />
           @error('next_of_kin_surname')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="next_of_kin_phone">Next Of Kin Phone</label>
           <input class="form-control @error('next_of_kin_phone') is-invalid @enderror" name="next_of_kin_phone"
              id="next_of_kin_phone" type="text" placeholder="Enter NExt Of Kin Surname"
              value="{{ old('next_of_kin_phone') }} @isset($member){{ trim($member->next_of_kin_phone) }}@endisset" />
           @error('next_of_kin_phone')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
        <div class="form-group">
           <label class="small mb-1" for="next_of_kin_email">Next Of Kin Email</label>
           <input class="form-control @error('next_of_kin_email') is-invalid @enderror" name="next_of_kin_email"
              id="next_of_kin_email" type="email" placeholder="Enter next Of Kin Email"
              value="{{ old('next_of_kin_email') }} @isset($member){{ trim($member->next_of_kin_email) }}@endisset" />
           @error('next_of_kin_email')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
        </div>
     </div>

   <div class="col-xl-3">
    <div class="form-group">
       <label class="small mb-1" for="membership_date">Membership Date</label>
       <input class="form-control @error('membership_date') is-invalid @enderror" name="membership_date"
          id="membership_date" type="text" placeholder="Enter Membership Date"
          value="{{ old('membership_date') }} @isset($member){{ trim($member->membership_date) }}@endisset"
          onfocus="(this.type='date')" onblur="(this.type='text')" />
       @error('membership_date')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="home_number">Home Telephone</label>
       <input class="form-control @error('membership_date') is-invalid @enderror" name="home_number"
          id="home_number" type="text" placeholder="Enter telephone"
          value="{{ old('home_number') }} @isset($member){{ trim($member->home_number) }}@endisset" />
       @error('home_number')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="office_number">Office Number</label>
       <input class="form-control @error('office_number') is-invalid @enderror" name="office_number"
          id="home_number" type="text" placeholder="Enter Membership Date"
          value="{{ old('office_number') }} @isset($member){{ trim($member->office_number) }}@endisset" />
       @error('office_number')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="email">Email Address</label>
       <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email"
          placeholder="Enter Email"
          value="{{ old('email') }} @isset($member){{ trim($member->email) }}@endisset" />
       @error('email')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="website">Website</label>
       <input class="form-control @error('website') is-invalid @enderror" name="website" id="website" type="url"
          placeholder="Enter website address"
          value="{{ old('website') }} @isset($member){{ trim($member->website) }}@endisset" />
       @error('website')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="address_line1">Enter Address Line 1</label>
       <input class="form-control @error('address_line1') is-invalid @enderror" name="address_line1"
          id="address_line1" type="text" placeholder="Enter Membership Date"
          value="{{ old('address_line1') }} @isset($member){{ trim($member->address_line1) }}@endisset" />
       @error('address_line1')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="address_line2">Enter Address Line 2</label>
       <input class="form-control @error('address_line2') is-invalid @enderror" name="address_line2"
          id="address_line2" type="text" placeholder="Enter Membership Date"
          value="{{ old('address_line2') }} @isset($member){{ trim($member->address_line2) }}@endisset" />
       @error('address_line2')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="address_line3">Enter Address Line 3</label>
       <input class="form-control @error('address_line3') is-invalid @enderror" name="address_line3"
          id="address_line3" type="text" placeholder="Enter Membership Date"
          value="{{ old('address_line3') }} @isset($member){{ trim($member->address_line3) }}@endisset" />
       @error('address_line3')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
</div>  
<div class="col-xl-3">    
    <div class="form-group">
       <label class="small mb-1" for="postal_code">Enter Postal Code</label>
       <input class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" id="postal_code"
          type="text" placeholder="Enter Membership Date"
          value="{{ old('postal_code') }} @isset($member){{ trim($member->postal_code) }}@endisset" />
       @error('postal_code')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="city">City</label>
       <input class="form-control @error('city') is-invalid @enderror" name="city" id="city" type="text"
          placeholder="Enter Membership Date"
          value="{{ old('city') }} @isset($member){{ trim($member->city) }}@endisset" />
       @error('city')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="province">Province</label>
       <select class="form-control @error('province') is-invalid @enderror" name="province">
          <option value="@isset($member) {{ trim($member->province) }} @endisset">
             @if (isset($member)) {{ trim($member->province) }} @else Select
             Province @endif
          </option>
          @foreach ($provinces as $province)
          <option value="{{ $province }}">{{ $province }}</option>
          @endforeach
       </select>
       @error('province')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="office_address_line1">Enter Address Line 1</label>
       <input class="form-control @error('office_address_line1') is-invalid @enderror" name="office_address_line1"
          id="office_address_line1" type="text" placeholder="Enter Membership Date"
          value="{{ old('office_address_line1') }} @isset($member){{ trim($member->office_address_line1) }}@endisset" />
       @error('office_address_line1')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="office_address_line2">Enter Address Line 2</label>
       <input class="form-control @error('office_address_line2') is-invalid @enderror" name="office_address_line2"
          id="office_address_line2" type="text" placeholder="Enter Membership Date"
          value="{{ old('office_address_line2') }} @isset($member){{ trim($member->office_address_line2) }}@endisset" />
       @error('office_address_line2')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="office_address_line3">Enter Address Line 3</label>
       <input class="form-control @error('office_address_line3') is-invalid @enderror" name="office_address_line3"
          id="office_address_line3" type="text" placeholder="Enter Membership Date"
          value="{{ old('office_address_line3') }} @isset($member){{ trim($member->office_address_line3) }}@endisset" />
       @error('office_address_line3')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="office_postal_code">Office Postal Code</label>
       <input class="form-control @error('office_postal_code') is-invalid @enderror" name="office_postal_code"
          id="city" type="office_postal_code" placeholder="Enter Membership Date"
          value="{{ old('city') }} @isset($member){{ trim($member->office_postal_code) }}@endisset" />
       @error('office_postal_code')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="office_province">Office Province</label>
       <select class="form-control @error('office_province') is-invalid @enderror" name="office_province">
          <option value="@isset($member) {{ trim($member->office_province) }} @endisset">
             @if (isset($member)) {{ trim($member->office_province) }} @else
             Select Province @endif
          </option>
          @foreach ($provinces as $province)
          <option value="{{ $province }}">{{ $province }}</option>
          @endforeach
       </select>
       @error('office_province')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
       @enderror
    </div>
 
 </div>

</div>
<div class="row text-center">
    <div class="col-xl-4"> </div>
    <div class="col-xl-4"><button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button></div>
    <div class="col-xl-4"> </div>
</div>
