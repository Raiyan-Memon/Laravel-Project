
@include('layouts.app')

<div class="container">
    <h1 class="text-left">Showing the selected data</h1>
{{-- <h5><b>Id</b> : {{$user->id}}</h5> --}}
<h5><b>Name</b> : {{$user->name}}</h5>
<h5><b>Email</b> : {{$user->email}}</h5>
{{-- <h5><b>Password</b> : {{$user->password}}</h5> --}}
<hr style=" border: 2px solid blue;width:50%">
<h2 style="color: blue">Relationship</h2>
<hr style=" border: 2px solid blue;width:50%">
<h5><b>Projects   </b> :<br>   @foreach ($user->Projects as $project)
    {{$project->name}}<br>
    @endforeach

<a href="{{route('users.index')}}"><button class="btn btn-primary">Go to Main</button></a>
</div>

