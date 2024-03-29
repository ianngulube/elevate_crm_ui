@csrf

<input type="text" hidden id="user_id" name="user_id" value="{{ Auth::user()->id }}" >
<div class="form-row">
    <div class="col-md-12">

        <div class="form-group">
            <label class="small mb-1" for="member_id">Select Member:</label>
            <select type="text" class="form-control @error('type') is-invalid @enderror" name="member_id">  
                <option value="@isset($memberTask) {{trim($memberTask->member_id) }} @endisset"> @if(isset($memberTask)) {{ trim($memberTask->member_id) }} @else Select Member @endif  </option>
                @foreach ($members as $member)
                <option value="{{ $member->id }}">{{ $member->id . " ".$member->membership_number . " ".$member->firstname . " ". $member->surname. " ". $member->tenant_id }}</option>
                @endforeach   
              </select>   
            @error('member_id')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="priority">Channel</label>
            <select class="form-control @error('priority') is-invalid @enderror" name="priority">  
                <option value="@isset($memberTask) {{trim($memberTask->priority) }} @endisset"> @if(isset($memberTask)) {{ trim($memberTask->priority) }} @else Select Channel @endif  </option>
                @foreach ($priorities as $priority)
                <option value="{{ $priority }}">{{ $priority}}</option>
                @endforeach   
              </select>   
            @error('priority')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div> 

        <div class="form-group">
            <label class="small mb-1" for="type">Task Type</label>
            <select class="form-control @error('type') is-invalid @enderror" name="type">  
                <option value="@isset($memberTask) {{trim($memberTask->type) }} @endisset"> @if(isset($memberTask)) {{ trim($memberTask->type) }} @else Select Type @endif  </option>
                @foreach ($taskTypes as $type)
                <option value="{{ $type }}">{{ $type}}</option>
                @endforeach   
              </select>   
            @error('type')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="small mb-1" for="name">Summary</label>
            <input class="form-control @error('name') is-invalid @enderror" name="name"
                id="name" type="text" placeholder="Enter  Subject" 
                value="{{old('name') }} @isset($contribution){{trim($memberTask->name)}}@endisset" />
            @error('name')
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
         

      

        <div class="form-group">
            <label class="small mb-1" for="dob">Due Date</label>
            <input class="form-control @error('dueDate') is-invalid @enderror" name="dueDate" id="dueDate" type="text"
               placeholder="Enter date of birth"
               value="{{ old('dueDate') }} @isset($memberTask){{ $memberTask->dueDate }}@endisset" onfocus="(this.type='date')"
               onblur="(this.type='text')" />
            @error('dueDate')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
         </div>


        <div class="form-group">
            <label class="small mb-1" for="assignedTo">Assign To:</label>
            <select type="text" class="form-control @error('type') is-invalid @enderror" name="assignedTo">  
                <option value="@isset($memberTask) {{trim($memberTask->assignedTo) }} @endisset"> @if(isset($memberTask)) {{ trim($memberTask->assignedTo) }} @else Select Administrator @endif  </option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name  }}</option>
                @endforeach   
              </select>   
            @error('assignedTo')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>   
        

  
     

</div>



</div> 



<div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-md btn-block text-white"
        type="submit">Submit Task</button></div>