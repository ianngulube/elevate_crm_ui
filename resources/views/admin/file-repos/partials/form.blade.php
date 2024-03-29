@csrf

<input type="text" hidden id="user_id" name="user_id" value="{{ Auth::user()->id }}" >
<div class="form-row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="small mb-1" for="type">Document Type</label>
            <select class="form-control @error('type') is-invalid @enderror" name="type">  
                <option value="@isset($document) {{trim($document->type) }} @endisset"> @if(isset($document)) {{ trim($document->type) }} @else Select the Document Type @endif  </option>
                @foreach ($docTypes as $docType)
                <option value="{{ $docType }}">{{ $docType}}</option>
                @endforeach          
                
              </select>   
            @error('type')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="dept">File Upload</label>
            <input type="file" name="file" id="file" class="form-control">
          </div>

          <div class="form-group">
            <label class="small mb-1" for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                  aria-describedby="descriptionHelp" placeholder="Enter Description"
                 > {{ old('description') }} @isset($fileRepo) {{ trim($fileRepo->description) }} @endisset</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div> 




<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block"
        type="submit">Submit</button></div>