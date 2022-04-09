<div class="form-group">
    <label for="">User Name</label>
    {{-- <input type="text" class="form-control" name="user_name" value="{{$account->user_name ?? "" }}"> --}}

    {!!form::text('user_name', isset($account->user_name) ? $account->user_name : null   ,[
        'class' => 'form-control'
    ])!!}
    <span class="text-danger">
        @error('user_name')
        *{{$message}}
        @enderror
    </span>
</div>


<div class="form-group">
    <label for="">First Name</label>
    {{-- <input type="text" class="form-control" name="first_name" value="{{$account->first_name ?? "" }}"> --}}
    {!!form::text('first_name', isset($account->first_name) ? $account->first_name : null   ,[
        'class' => 'form-control'
    ])!!}

    <span class="text-danger">
        @error('first_name')
        *{{$message}}
        @enderror
    </span>
</div>

<div>
  
</div>

<div class="form-group">
    <label for="last_name">Last Name</label>
    {{-- <input type="text" class="form-control" name="last_name" value="{{$account->last_name ?? "" }}"> --}}
    {!!form::text('last_name', isset($account->last_name) ? $account->last_name : null   ,[
        'class' => 'form-control'
    ])!!}

    <span class="text-danger">
        @error('last_name')
        *{{$message}}
        @enderror
    </span>
</div>


<div class="form-group">
    <label for="">Date of Birth</label>
    {{-- <input type="date" class="form-control" name="dob" value="{{$account->dob ?? "" }}"> --}}
    {!!form::date('dob', isset($account->dob) ? $account->dob : null   ,[
        'class' => 'form-control'
    ])!!}

    <span class="text-danger">
        @error('dob')
        *{{$message}}
        @enderror
    </span>
</div>


<div class="form-group">
    <label for="">Phone</label>
    {{-- <input type="number" class="form-control" name="phone" value="{{$account->phone ?? "" }}"> --}}
    {!!form::number('phone', isset($account->phone) ? $account->phone : null   ,[
        'class' => 'form-control'
    ])!!}
    <span class="text-danger">
        @error('phone')
        *{{$message}}
        @enderror
    </span>
</div>


<div class="form-group">
    <label for="">Email</label>
    {{-- <input type="email" class="form-control" name="email" value="{{$account->email ?? "" }}"> --}}
    {!!form::email('email', isset($account->email) ? $account->email : null   ,[
        'class' => 'form-control'
    ])!!}

    <span class="text-danger">
        @error('email')
        *{{$message}}
        @enderror
    </span>
</div>


<div class="form-group">
    <label for="">Address</label>
    {{-- <input type="textarea" class="form-control" name="address" value="{{$account->address ?? "" }}"> --}}
    {!!form::text('address', isset($account->address) ? $account->address : null   ,[
        'class' => 'form-control'
    ])!!}
    <span class="text-danger">
        @error('address')
        *{{$message}}
        @enderror
    </span>
</div>


{{-- <div class="form-group">
<label for="">Hobby</label><br>
Cricket <input type="checkbox" class="" name="hobby[]" value="cricket"><br>
Batminton<input type="checkbox" class="" name="hobby[]" value="batminton"><br>
Football<input type="checkbox" class="" name="hobby[]" value="football"><br>
</div> --}}

{{-- @dd($account->hobby) --}}

@php

if(isset($account)){

// $cricket = strpos($account->hobby, "cricket");
$badminton = strpos($account->hobby, "badminton");
$football = strpos($account->hobby, "football");

$cricket = strstr($account->hobby, 'cricket');
// dd($cricket);

}
@endphp




<div class="form-group">    
    <label for="">Hobby</label><br>
Cricket{!!Form::checkbox('hobby[]', 'cricket', ($cricket ?? '')  !== false ? "checked" : NULL)!!}
Batminton{!!Form::checkbox('hobby[]', 'badminton', ($badminton ?? '') !== false ? "checked" : NULL)!!}
Football{!!Form::checkbox('hobby[]', 'football', ($football ?? '') !== false ? "checked" : NULL)!!}

<p style="color:rgb(179, 179, 179)">Note : Unselect one which you don't like</p>
</div>


<div class="form-group">
{{-- <label for="gender">Gender</label><br>
        <label for="male">Male</label>
       <input type="radio" class="" name="gender" value="male"  {{($account->gender ?? '') =='male' ? "checked" : ""}}>

       <label for="male">Female</label>
       <input type="radio" class="" name="gender" value="female" {{($account->gender ?? '') =='female' ? "checked" : ""}}>  --}}

    Male {!!Form::radio('gender', 'male', ($account->gender ?? '') =='male' ? "checked" : "")!!}
     Female{!!Form::radio('gender', 'female', ($account->gender ?? '') =='female' ? "checked" : "")!!}

</div>
<select name="country">
    <option name="country" value="" >Select your Country</option>
    <option name="country" value="india" {{($account->country ?? '') == 'india' ? "Selected" : ""}}>India</option>
    <option name="country" value="china" {{($account->country ?? '') == 'china' ? "Selected" : ""}}>China</option>
    <option name="country" value="pakistan" {{($account->country ?? '') == 'pakistan' ? "Selected" : ""}}>Pakistan</option> 
</select>


{{-- {!! Form::select('country',[
    '' => 'Select your Country',
    "india (($account->country ?? '') == 'india' ? 'Selected' : '')" => 'India',
    "china (($account->country ?? '') == 'china' ? 'Selected' : '')"=>'China',
    'pakistan'=>'Pakistan'
    ],'') !!} --}}


<select name="state">
    <option name="state" value="" >Select your state</option>
    <option name="state" value="gujarat" {{($account->state ?? '') == 'gujarat' ? "Selected" : ""}}>Gujarat</option>
    <option name="state" value="maharashtra" {{($account->state ?? '') == 'maharashtra' ? "Selected" : ""}}>Maharashtra</option>
    <option name="state" value="up" {{($account->state ?? '') == 'up' ? "Selected" : ""}}>Up</option>
</select>
  
<br>
<br>
{{-- <h3>Attaching the relationship</h3> --}}


{{-- <div class="form-group row">
    
    <label for="contact_id" name="contact_id" value="Contact">Contacts</label>
    
    @php
    $contacts = DB::table('contacts')->select('name','id')->get();   
    @endphp
    <select class="form-control" name="contact_id" >
        <option name="contact_id" value="" >Select your Contact</option>
        @foreach($contacts as $contact)
        <option value="{{$contact->id}}">{{$contact->name}}
            @endforeach
            
        </select>
        <input type="hidden" name="relationshipmodulename[]" value="Contact">
    </div> --}}
    
    @if(isset($account->Projects))
    {{-- Check here if you want to Detach<input type="checkbox" name="checkbox" value="unknown"> --}}
    <div class="form-check form-switch">
        <input style="cursor: pointer" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="checkbox" value="unknown">
        <label style="cursor: pointer" class="form-check-label" for="flexSwitchCheckChecked">Switch here if you want to Detach</label>
      </div>
    @endif
    
    <div class="form-group row">
        
        <label for="contact_id" name="contact_id" value="Contact">Contacts</label>
        
        @php
      $contacts = DB::table('contacts')->select('name','id')->get();   
      @endphp
     
    <select class="form-control" name="contact_id" >
        <option name="contact_id" value="" >Select your Contact</option>
        @foreach(($contacts ?? '') as $contact)
        <option value="{{$contact->id}}">{{$contact->name}}
            @endforeach</option>


 {{-- @dd(isset($account->contacts))  --}}
 
 @if(isset($account->contacts))

            <option><br></option>
            <option>Attached : </option>
            @foreach ((($account->contacts) ?? '') as $contact)
            <option value="{{($contact->id ?? '')}}">
                {{($contact->name ?? '')}}
                @endforeach
@endif
                
            </select>

            <input type="hidden" name="relationshipmodulename[]" value="Contact">
        </div>
        
        <br>

<div class="form-group row">
 
   
    <label for="project_id" name="project_id" value="User">Projects</label>
    @php
      $projects = DB::table('projects')->select('name','id')->get();   
      
      @endphp
    <select class="form-control" name="project_id">
        <option name="state" value="" >Select your Project</option>
        @foreach($projects as $project)
        <option value="{{$project->id}}">{{$project->name}}
            @endforeach</option>
            <option></option>

    @if(isset($account->Projects))
            <option>Attached : </option>
        @foreach ($account->Projects as $project)
       <option value="{{$project->id}}">
        {{$project->name}}
        @endforeach
    @endif
    
        </select>    
        <input type="hidden" name="relationshipmodulename[]" value="Project">
    </div>

  

  

{{-- <h3>Detaching the relationship</h3> --}}



        {{-- <label for="contact_id" name="contactid" value="Contact">Contacts</label>
        <select class="form-control" name="contact_id">
        <option name="" value="" ></option>
        @foreach(($account->contacts ?? '') as $contact)
        <option value="{{$contact->id}}">{{$contact->name}}
            @endforeach
    
        </select>    
        <input type="hidden" name="detachmodulename[]" value="Contact"> --}}

<br>

<button type="submit" class="btn btn-primary">Submit</button>
<br>
<br>
</div>