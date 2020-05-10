@extends('admin.layouts.app')
	@section('content2')
        



    
   @if (@isset($errors))
   <h5>{{ $errors }}"</h5> 
   @endisset

     
  
{{-- 
@isset($errors)
<div class="alert alert-dark ">
  
  <ul>
        
         <li>{{ $errors }}</li>
       
        
  
  </ul>
</div>  
endisset  --}}
    

<a href="{{route('admin.users.create')}}" class="btn btn-primary mb-3 ">create</a>
<table class="table table-striped">
    <thead class="thead-dark">
      <tr>

        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Actions</th>
     
      
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
       
        <td>{{ $user->id  }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
    
      
        <td>
          <form action="{{ route('admin.users.destroy',$user) }}" method="POST">
          @csrf
          @method('delete')
           <button type="submit" class="btn " onclick="return confirm('Are you sure?')">Delete</button>
           <a href="{{ route('admin.users.edit', $user) }}" class="btn">Edit</a>
           {{--  <a href="{{ route('admin.users.show', $user) }}" class="btn">View</a>  --}}
          </form>

        </td>
        
        

      </tr>
      @endforeach
      
    </tbody>
  </table>
     
  {{ $users->links() }}
   
@endsection


