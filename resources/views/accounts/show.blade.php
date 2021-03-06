@include('layouts.app')

<div class="container">
    <h1 class="text-left">Showing the selected data</h1>
<h5><b>id</b> : {{$account->id}}</h5>
<h5><b>User Name</b> : {{$account->user_name}}</h5>
<h5><b>First Name</b> : {{$account->first_name}}</h5>
<h5><b>Last Name</b> : {{$account->last_name}}</h5>
<h5><b>Date of Birth</b> : {{$account->dob}}</h5>
<h5><b>Phone</b> : {{$account->phone}}</h5>
<h5><b>Email</b> : {{$account->email}}</h5>
<h5><b>Address</b> : {{$account->address}}</h5>
<h5><b>Hobby</b> : {{$account->hobby}}</h5>
<h5><b>Gender</b> : {{$account->gender}}</h5>
<h5><b>Country</b> : {{$account->country}}</h5>
<h5><b>State</b> : {{$account->state}}</h5>

<hr style="border: 2px solid blue; width:50%">
<h2 style="color: blue;">Relationship</h2>
<hr style="border: 2px solid blue; width:50%">
<h5><b>Contacts</b> :  <br> @foreach ($account->contacts as $contact)
    {{$contact->name}}<br>
    @endforeach</h5>

    <hr style="border: 2px solid blue; width:30%">
    <h5><b>Projects</b> : <br>   @foreach ($account->Projects as $project)
        {{$project->name}}<br>
        @endforeach</h5>


@include('layouts.inc.footer')
</div>
