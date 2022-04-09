

@include('layouts.app')

<form action="{{route('users.update', $user)}}" method="POST">

    <div class="container">
        <h1 class="text-center">Updation form</h1>

        @csrf
        @method('PATCH')
        @include('users.form')



    </div>

</form>