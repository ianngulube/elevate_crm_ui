@csrf

<input type="text" hidden id="user_id" name="user_id" value="{{ Auth::user()->id }}" >
<div class="row">
  <div class="col-xl-6">
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
      <label class="small mb-1" for="cellphone_number">Cellphone Number</label>
      <input class="form-control @error('cellphone_number') is-invalid @enderror" name="cellphone_number"
        id="cellphone_number" type="text" placeholder="Enter Password"
        value="{{ old('cellphone_number') }} @isset($member){{ trim($member->cellphone_number) }}@endisset" />
      @error('cellphone_number')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
    </div>
  </div>
  <div class="col-xl-6">
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
      <label class="small mb-1" for="email">Email Address</label>
      <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email"
        placeholder="Enter Email"
        value="{{ old('email') }} @isset($member){{ trim($member->email) }}@endisset" />
      @error('email')
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
  
   </div>
   
</div>

<div class="row text-center">
  <div class="col-xl-4"> </div>
  <div class="col-xl-4"><button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button></div>
  <div class="col-xl-4"> </div>
</div>
