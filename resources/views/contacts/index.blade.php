@include('layouts.app')

{{-- <div id="raiyan"></div> --}}

<h1 class="text-center">Contacts</h1>
<div class="container">
    <a href="{{route('contacts.create')}}"><button class="btn btn-primary">Go to Insert</button></a>
    <div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        {{-- <th scope="col">Contact ID</th> --}}
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Account</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($contact as $data)
      <tr>
        {{-- <th scope="row">{{$data->id}}</th> --}}
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone}}</td>
        <td>  
      
       
          @foreach ($data->accounts as $account)
          {{$account->user_name}}<br>
          @endforeach
        </td>
        <td>
            <a href="{{route('contacts.show', $data->id)}}"> <button class="btn btn-primary">Show</button></a>
            <a href="{{route('contacts.edit', $data->id)}}"> <button class="btn btn-success">Edit</button></a>

            <form action="{{route('contacts.destroy', $data->id)}}" method="POST">

              @csrf
              @method('DELETE')
            <a href=""> <button class="btn btn-danger">Delete</button></a>

            
            </form>
        </td>
       
      </tr>
      @endforeach
 
    </tbody>
  </table>
    </div>
</div>

<span>
  {{$contact->links()}}
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
   </style>