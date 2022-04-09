@csrf

<div class="form-group">
    Name: <input type="text" class="form-control" value="{{(isset($contact->name)) ? $contact->name : null}}" name="name">
</div>

<div class="form-group">
    Email: <input type="email" class="form-control" value="{{(isset($contact->email)) ? $contact->email : null}}" name="email">
</div>

<div class="form-group">
    Phone: <input type="number" class="form-control" value="{{(isset($contact->phone)) ? $contact->phone : null}}" name="phone">
</div>

<br>
@if(@isset($contact->accounts))
{{-- Check here if you want to Detach<input type="checkbox" name="checkbox" value="unknown"> --}}
<div class="form-check form-switch">
    <input style="cursor: pointer" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="checkbox" value="unknown">
    <label style="cursor: pointer" class="form-check-label" for="flexSwitchCheckChecked">Switch here if you want to Detach</label>
  </div>
@endif

<div class="form-group row">
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

@if(@isset($contact->accounts))

<option>Attached : </option>

@foreach ($contact->accounts as $account)
            <option value="{{$account->id}}">  
                {{$account->user_name}}  </option>@endforeach
    @endif
        </select>
    
</div>
<input type="hidden" name="relationshipmodulename[]" value="Account">
<br>

<button type="submit" class="btn btn-primary">Submit</button>