@csrf

<input type="text" hidden id="user_id" name="user_id" value="{{ Auth::user()->id }}" >
<div class="form-row">
    <div class="col-md-12">


        <div class="form-group">
            <label class="small mb-1" for="type">Status</label>
            <select class="form-control @error('type') is-invalid @enderror" name="type">
                <option value="@isset($memberTaskNote) {{trim($memberTaskNote->type) }} @endisset"> @if(isset($memberTask)) {{ trim($memberTask->type) }} @else Select Type @endif  </option>
                @foreach ($taskTypes as $type)
                <option value="{{ $type }}">{{ $type}}</option>
                @endforeach
              </select>
            @error('type')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>



        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1" for="description"> Details</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                      aria-describedby="descriptionHelp" placeholder="Enter Description"
                     > {{ old('description') }} @isset($memberTask) {{ trim($memberTask->description) }} @endisset</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>













</div>



</div>



<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-md btn-block text-white"
        type="submit">Submit Task</button></div>
