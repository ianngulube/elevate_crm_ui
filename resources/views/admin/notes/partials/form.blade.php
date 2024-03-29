@csrf
<input type="text" hidden id="member_id" name="member_id" value="{{ $member->id }}" >
<input type="text" hidden id="user_id" name="user_id" value="{{ Auth::user()->id }}" >
<div class="form-row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="small mb-1" for="description">Please enter Note Details Below</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                  aria-describedby="descriptionHelp" placeholder="Enter Description"
                 > {{ old('description') }} @isset($note) {{ trim($note->description) }} @endisset</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>

<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-bg btn-block text-white"
        type="submit">Submit Note</button></div>
