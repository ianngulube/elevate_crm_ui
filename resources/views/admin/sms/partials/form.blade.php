@csrf
<input type="text" hidden id="member_id" name="member_id" value="{{ $member->id }}" >
<input type="text" hidden id="user_id" name="user_id" value="{{ Auth::user()->id }}" >
<div class="form-row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="small mb-1" for="name">Cell Number</label>
            <input class="form-control @error('msisdn') is-invalid @enderror" name="msisdn"
                id="msisdn" type="text" placeholder="Enter  MSISDN"
                value="{{old('msisdn') }} @isset($member){{trim($member->cellphone_number)}}@endisset" />
            @error('msisdn')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="textMessage">Please enter SMS Details</label>
            <br>
            <hr>
            <textarea rows="10" maxlength="161" class="form-control @error('description') is-invalid @enderror" name="textMessage" id="textMessage"
                  aria-describedby="descriptionHelp"
                 > {{ old('textMessage') }} @isset($sms) {{ trim($sms->textMessage) }} @endisset</textarea>
                 <br>
                 <hr>
                 <label class="text-yellow" id ="count"></label>
                 <br>
            @error('textMessage')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>


<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-bg btn-block text-white"
        type="submit">SEND SMS</button></div>

