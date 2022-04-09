
@include('layouts.app')

<div class="container">
    <h1 class="text-left">Showing the selected data</h1>
{{-- <h5><b>Id</b> : {{$contact->id}}</h5> --}}
<h5><b>Name</b> : {{$contact->name}}</h5>
<h5><b>Email</b> : {{$contact->email}}</h5>
<h5><b>Phone</b> : {{$contact->phone}}</h5>

<hr style="border: 2px solid blue;width:50%;">
<h2 style="color: blue;">Relationship</h2>
<hr style="border: 2px solid blue;width:50%;">

<h5><b>Accounts</b> :<br>       @foreach ($contact->accounts as $account)
    {{$account->user_name}}<br>
    @endforeach</h5>


<a href="{{route('contacts.index')}}"><button class="btn btn-primary">Go to Main</button></a>
</div>

