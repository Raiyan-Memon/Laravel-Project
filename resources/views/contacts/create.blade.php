
@include('layouts.app')


<div class="container">
    <a href="{{route('contacts.index')}}"><button class="btn btn-primary">Go to List</button></a>
<form action="{{route('contacts.store')}}" method="POST">

   @include('contacts.form')
    
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