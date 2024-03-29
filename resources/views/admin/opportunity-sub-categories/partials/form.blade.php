@csrf
<div class="form-group">
    <label class="small mb-1" for="opportunity_category_id">Opportunity  Categories</label>
    <select class="form-control @error('opportunity_category_id') is-invalid @enderror" name="opportunity_category_id">  
        <option value="@isset($opportunitySubCategory) {{trim($opportunitySubCategory->id) }} @endisset"> @if(isset($opportunitySubCategory)) {{ trim($opportunitySubCategory->category_name) }} @else Select an opportunity category  @endif  </option>
        @foreach ($opportunityCategories as $opportunityCategory)
        <option value="{{ $opportunityCategory->id }}">{{ $opportunityCategory->name }}</option>
        @endforeach
      
        
      </select>   
    @error('opportunity_category_id')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>
<div class="form-row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="small mb-1" for="name">Name</label>
            <input class="form-control @error('name') is-invalid @enderror" name="name"
                id="name" type="text" placeholder="Enter  name" 
                value="{{old('name') }} @isset($opportunitySubCategory){{trim($opportunitySubCategory->name)}}@endisset" />
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>
<div class="form-group">
    <label class="small mb-1" for="description">Description</label>
    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
          aria-describedby="descriptionHelp" placeholder="Enter Description"
         > {{ old('description') }} @isset($opportunitySubCategory) {{ trim($opportunitySubCategory->description) }} @endisset</textarea>
    @error('description')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>
<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block"
        type="submit">Submit</button></div>