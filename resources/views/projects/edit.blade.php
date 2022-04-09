

@include('layouts.app')

<form action="{{route('projects.update', $project)}}" method="POST">

    <div class="container">
        <h1 class="text-center">Updation form</h1>

        @csrf
        @method('PATCH')
        @include('projects.form')



    </div>

</form>