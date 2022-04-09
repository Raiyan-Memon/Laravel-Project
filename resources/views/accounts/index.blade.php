

@include('layouts.app')

@if(session()->has('message'))
{{-- <div class="alert alert-danger"> --}}
{{-- {{ session()->get('message') }} --}}
<script> alert("Deleted Sucessfully");</script>

{{-- </div> --}}
@endif

@if(session()->has('insert-msg'))
{{-- <div class="alert alert-success">
{{ session()->get('insert-msg') }}
</div> --}}
<script> alert("Inserted Sucessfully");</script>
@endif

@if(session()->has('update-msg'))
{{-- <div class="alert alert-success">
{{ session()->get('update-msg') }}
</div> --}}
<script> alert("Updated Sucessfully");</script>
@endif

{{-- <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script> --}}

{{-- <script> alert("Raiyan");</script> --}}

{{-- <div class="container" id="raiyan"></div> --}}



<h1 class="text-center">Accounts</h1>

<div class="container">
<a href="{{route('accounts.create')}}"> <button class="btn btn-primary">Insert Data</button></a>

<div class="table-responsive">
<table class="table table-bordered">
    <thead>
        <tr>
            {{-- <th scope="col">id</th> --}}
            <th scope="col">User Name</th>
            {{-- <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Date of birth</th>
            <th scope="col">Phone</th> --}}
            <th scope="col">Email</th>
            {{-- <th scope="col">Address</th>
            <th scope="col">Hobby</th>
            <th scope="col">Gender</th>
            <th scope="col">Country</th>

            <th scope="col">State</th> --}}

        
            <th scope="col">Contact</th>
            <th scope="col">Projects</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($account as $data)

        <tr>
            {{-- <th scope="row">{{$data->id}}</th> --}}
            <td>{{$data->user_name}}</td>
            {{-- <td>{{$data->first_name}}</td>
            <td>{{$data->last_name}}</td>
            <td>{{$data->dob}}</td>
            <td>{{$data->phone}}</td> --}}
            <td>{{$data->email}}</td>
          
            <td>
                @foreach ($data->contacts as $contact)
                {{$contact->name}}<br>
                @endforeach
            </td>

            <td>
                @foreach ($data->Projects as $project)
                {{$project->name}}<br>
                @endforeach
            </td>
            {{-- <td>{{$data->address}}</td>
            <td>{{$data->hobby}}</td> 
            <td>{{$data->gender}}</td>
            <td>{{$data->country}}</td>
            <td>{{$data->state}}</td> --}}
            {{-- <td> --}}
                {{-- @dump($account->contacts    ) --}}
            {{-- </td> --}}
            <td>
                <a href="{{route('accounts.show',$data->id)}}"> <button class="btn btn-primary">Show</button></a>
                <a href="{{route('accounts.edit',$data->id)}}"> <button class="btn btn-success">Edit</button></a>
                <span>
                    {{-- <form action="{{route('accounts.destroy' ,$data->id)}}" method="POST"> --}}
                        {!! Form::open ([
                            'url' => route('accounts.destroy', $data->id),
                            'method' => 'POST'
                        ]) !!}
                        @csrf
                        @method('DELETE')
                        <a> <button class="btn btn-danger">Delete</button></a>
                    {{-- </form> --}}
                    {!! Form::close() !!}
                </span>
            </td>


            <!-- <tr>
            <th scope="row">1</th>
            <td>Raiyan</td>
            <td>Memon</td>
            <td>34/34/6060</td>
            <td>722727</td>
            <td>asdklfjsd@jdslkf</td>
            <td>dsfj sdjfkljsd ff</td>
            <td>
                <button class="btn btn-primary">Show</button>
                <button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td> -->

        </tr>
        @endforeach

    </tbody>
</table>
</div>
</div>

{{-- {{$contact->name}} --}}

<span>
    {{$account->links()}}
   </span>
   
   <style>
   
  


     .text-sm.text-gray-700.leading-5{
    
       display: inline-block;
     }
   
   .font-medium{
     display: inline;
   }
     .w-5{
       display: none;
     }



     table { 
  width: 100%; 
  border-collapse: collapse; 
     }
     </style>
{{-- 
<h1 id="demo"></h1>
<button onclick="myFunction()">Click me</button>


<script>

function myFunction(){
    document.getElementById("demo").innerHTML = "Hello World";
}
    </script> --}}


</body>

</html>