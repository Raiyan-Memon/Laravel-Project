@csrf

<div class="form-group">
    Name: <input type="text" class="form-control" value="{{(isset($user->name)) ? $user->name : null}}" name="name">
</div>

<div class="form-group">
    Email:  <input type="email" class="form-control" value="{{(isset($user->email)) ? $user->email : null}}" name="email">
</div>

<div class="form-group">
    Password:  <input type="password" class="form-control" value="{{(isset($user->password)) ? $user->password : null}}" name="password">
</div>

<input type="hidden" name="relationshipmodulename[]" value="Project">
<br>
@if(isset($user->Projects))
{{-- Check here if you want to Detach<input type="checkbox" name="checkbox" value="unknown"> --}}
<div class="form-check form-switch">
    <input style="cursor: pointer" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="checkbox" value="unknown">
    <label style="cursor: pointer" class="form-check-label" for="flexSwitchCheckChecked">Switch here if you want to Detach</label>
  </div>
@endif

<div class="form-group row">
    {{-- {!!form::label('account_id','Account'); !!} --}}

    <label for="project_id" name="project_id" value="User">Projects</label>

    @php
      $projects = DB::table('projects')->select('name','id')->get();   
      
    @endphp
    <select class="form-control" name="project_id">
        <option name="state" value="" >Select your Account</option>
        @foreach($projects as $project)
     
        <option value="{{$project->id}}">{{$project->name}}
            @endforeach</option>

            @if(isset($user->Projects))
            <option><br></option>
            <option> Atttached : </option>
            @foreach ($user->Projects as $project)
            <option value="{{$project->id}}">
                {{$project->name}}</option>
                @endforeach
                @endif

        </select>

    
</div>
<br>

<button type="submit" class="btn btn-primary">Submit</button>