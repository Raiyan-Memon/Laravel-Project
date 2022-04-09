@csrf

<div class="form-group">
    Name: <input type="text" class="form-control" value="{{(isset($project->name)) ? $project->name : null}}" name="name">
</div>

<div class="form-group">
    Description:  <input type="textbox" class="form-control" value="{{(isset($project->description)) ? $project->description : null}}" name="description">
</div>

<div class="form-group">
    Date: <input type="date" class="form-control" value="{{(isset($project->date)) ? $project->date : null}}" name="date">
</div>
<br>

@if(isset($project->accounts))
{{-- <input class="form-check-input" type="checkbox" name="checkbox" value="unknown"> Check here if you want to Detach --}}

<div class="form-check form-switch">
    <input style="cursor: pointer" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="checkbox" value="unknown">
    <label style="cursor: pointer" class="form-check-label" for="flexSwitchCheckChecked">Switch here if you want to Detach</label>
  </div>
@endif

<div class="form-group row">
    {{-- {!!form::label('account_id','Account'); !!} --}}

    <label for="user_id" name="user_id" value="User">Users</label>

    @php
      $users = DB::table('users')->select('name','id')->get();   
      
    @endphp
    <select class="form-control" name="user_id">
        <option name="state" value="" >Select Users</option>
        @foreach($users as $user)
     
        <option value="{{$user->id}}">{{$user->name}}
            @endforeach</option>

            <option><br></option>

            @if(isset($project->Users))
            <option>Attached : </option>

            @foreach ($project->Users as $user)
            <option value="{{$user->id}}">
                {{$user->name}}<br>
                @endforeach</option>
                @endif
        </select>



    
</div>
<input type="hidden" name="relationshipmodulename[]" value="User"><div class="form-group row">
    {{-- {!!form::label('account_id','Account'); !!} --}}

    <label for="account_id" name="account_id" value="Account">Accounts</label>

    @php
      $accounts = DB::table('accounts')->select('user_name','id')->get();   
    @endphp
    <select class="form-control" name="account_id">
        <option name="state" value="" >Select your Account</option>
        @foreach($accounts as $account)
        <option value="{{$account->id}}">{{$account->user_name}}
            @endforeach</option>

            <option><br></option>
            @if(isset($project->accounts))
            <option>Attached : </option>
            @foreach ($project->accounts as $account)
            <option value="{{$account->id}}"> 
                {{$account->user_name}}</option>
                @endforeach
                @endif
        </select>
    
</div>
<input type="hidden" name="relationshipmodulename[]" value="Account">


<br>
<button type="submit" class="btn btn-primary">Submit</button>