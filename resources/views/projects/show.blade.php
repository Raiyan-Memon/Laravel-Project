
@include('layouts.app')

<div class="container">
    <h1 class="text-left">Showing the selected data</h1>
{{-- <h5><b>Id</b> : {{$project->id}}</h5> --}}
<h5><b>Name</b> : {{$project->name}}</h5>
<h5><b>Description</b> : {{$project->description}}</h5>
<h5><b>Date</b> : {{$project->date}}</h5>

<hr style="border: 2px solid blue;width:50%;">
<h2 style="color: blue;">Relationship</h2>
<hr style="border: 2px solid blue;width:50%;">

<h5><b>Users</b> :   <br>@foreach ($project->Users as $user)
    {{$user->name}}<br>
    @endforeach</h5>



    <hr style="border: 2px solid blue; width:30%">
    <h5><b>Accounts</b> : <br>    @foreach ($project->accounts as $account)
        {{$account->user_name}}<br>
        @endforeach</h5>
      
  
      

<a href="{{route('projects.index')}}"><button class="btn btn-primary">Go to Main</button></a>
</div>

