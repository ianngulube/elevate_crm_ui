@csrf
<input type="text" hidden id="user_id" name="user_id" value="{{ Auth::user()->id }}" >
<div class="form-row">
    <div class="col-md-12">
       <div class="form-group">
            <label class="small mb-1" for="type">Opportunity Type</label>
            <select class="form-control @error('type') is-invalid @enderror" name="type">  
                <option value="@isset($opportunity) {{trim($opportunity->type) }} @endisset"> @if(isset($opportunity)) {{ trim($opportunity->type) }} @else Select an opportunity sub category  @endif  </option>
                @foreach ($types as $type)
                <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
              
                
              </select>   
            @error('type')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" >Opportunity  Categories</label>
            <select id="opportunityCategory" class="form-control">Select an opportunity category</option>
                @foreach ($opportunityCategories as $opportunityCategory)
                <option value="{{ $opportunityCategory->id }}">{{ $opportunityCategory->name }}</option>
                @endforeach        
              </select>   
            
        </div>
        
        <div class="form-group">
            <label class="small mb-1" for="opportunity_sub_category_id">Opportunity Sub Categories</label>
            <select name="opportunity_sub_category_id" id="opportunity_sub_category_id" class="form-control">  
                <option value="">Please Select</option>
            </select>
           
              
                
              </select>   
            @error('opportunity_sub_category_id')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="name">Name</label>
            <input class="form-control @error('name') is-invalid @enderror" name="name"
                id="name" type="text" placeholder="Enter  name" 
                value="{{old('name') }} @isset($opportunity){{trim($opportunity->name)}}@endisset" />
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>

<div class="form-group">
    <label class="small mb-1" for="start_date">Start Date</label>
    <input class="form-control @error('start_date') is-invalid @enderror" name="start_date" id="start_date" type="text"
       placeholder="Enter Opportunity Start Date"
       value="{{ old('start_date') }} @isset($opportunity){{ $opportunity->start_date }}@endisset" onfocus="(this.type='date')"
       onblur="(this.type='text')" />
    @error('start_date')
    <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
 </div>

 <div class="form-group">
    <label class="small mb-1" for="end_date">End Date</label>
    <input class="form-control @error('end_date') is-invalid @enderror" name="end_date" id="end_date" type="text"
       placeholder="Enter Opportunity Start Date"
       value="{{ old('end_date') }} @isset($opportunity){{ $opportunity->end_date }}@endisset" onfocus="(this.type='date')"
       onblur="(this.type='text')" />
    @error('end_date')
    <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
 </div>


<div class="form-group">
    <label class="small mb-1" for="description">Description</label>
    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
          aria-describedby="descriptionHelp" placeholder="Enter Description"
         > {{ old('description') }} @isset($opportunity) {{ trim($opportunity->description) }} @endisset</textarea>
    @error('description')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
            <label for="dept">File Upload</label>
            <input type="file" name="file" id="file" class="form-control">
            @error('file')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
          </div>

<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block"
        type="submit">Submit</button></div>