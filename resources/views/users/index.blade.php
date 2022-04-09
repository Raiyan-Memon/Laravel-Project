@include('layouts.app')


{{-- <div id="raiyan"></div> --}}

<style>
/* .email{
 
  color: red; 
text-overflow:ellipsis;
  
} */
  </style>

<h1 class="text-center">Users</h1>
<div class="container">
    <a href="{{route('users.create')}}"><button class="btn btn-primary">Go to Insert</button></a>
    <div class="">
      <div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        {{-- <th scope="col">User ID</th> --}}
        <th scope="col">Name</th>
        <th class="email" data-toggle="collapse" scope="col">Email</th>
        <th scope="col">Project</th>
        {{-- <th scope="col">Password</th> --}}
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($user as $data)
      <tr>
        {{-- <th scope="row">{{$data->id}}</th> --}}
        <td>{{$data->name}}</td>
        <td class="email" data-toggle="collapse" >{{$data->email}}</td>
        <td>
          @foreach ($data->Projects as $project)
          {{$project->name}}<br>
          @endforeach
        {{-- <td>{{$data->password}}</td> --}}
        <td>
            <a href="{{route('users.show', $data->id)}}"> <button class="btn btn-primary">Show</button></a>
            <a href="{{route('users.edit', $data->id)}}"> <button class="btn btn-success">Edit</button></a>

            <form action="{{route('users.destroy', $data)}}" method="POST">

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
</div>

<span>
  {{$user->links()}}
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