@include('layouts.app')


<h1 class="text-center">Projects</h1>
<div class="container">
    <a href="{{route('projects.create')}}"><button class="btn btn-primary">Go to Insert</button></a>
    <div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        {{-- <th scope="col">Project ID</th> --}}
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Date</th>
        <th scope="col">Users</th>
        <th scope="col">Accounts</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($project as $data)
      <tr>
        {{-- <th scope="row">{{$data->id}}</th> --}}
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->date}}</td>
        <td>
          @foreach ($data->Users as $user)
          {{$user->name}}<br>
          @endforeach
        </td>

        <td>   @foreach ($data->accounts as $account)
          {{$account->user_name}}<br>
          @endforeach</td>

        <td>
            <a href="{{route('projects.show', $data->id)}}"> <button class="btn btn-primary">Show</button></a>
            <a href="{{route('projects.edit', $data->id)}}"> <button class="btn btn-success">Edit</button></a>

            <form action="{{route('projects.destroy', $data)}}" method="POST">

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
 {{$project->links()}}
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