{{-- {{$contact->id}} --}}

@include('layouts.app')

<form action="{{route('contacts.update', $contact)}}" method="POST">

    <div class="container">
        <h1 class="text-center">Updation form</h1>

        @csrf
        @method('PATCH')
        @include('contacts.form')



    </div>

</form>