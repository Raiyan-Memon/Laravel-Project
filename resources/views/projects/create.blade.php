
@include('layouts.app')


<div class="container">
    <a href="{{route('projects.index')}}"><button class="btn btn-primary">Go to List</button></a>
<form action="{{route('projects.store')}}" method="POST">

   @include('projects.form')
    
</form>
</div>


{{-- 
    {!! Form::open ([
        'url' => route('contacts.store'),
        'method' => 'POST'
    ])!!}
@csrf
    <div class="container">
        <h1 class="text-center">Add Project</h1>
        
        <hr>
    
        @include('contacts.form') --}}

    {{-- {{!! Form::close() !!}} --}}