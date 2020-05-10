@extends('admin.layouts.app')
	@section('content2')
        


  @if (@isset($errors))
  <h5>{{ $errors }}"</h5> 
  @endisset





<a href="{{route('admin.items.create')}}" class="btn btn-primary mb-3 ">create</a>
<table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Rtype</th>
        <th scope="col">Acr</th>
        <th scope="col">Status</th>
        <th scope="col">Group</th>
        <th scope="col">Type</th>
     
        <th scope="col">Actions/th>
      
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
      <tr>
       
        <td>{{ $item->id  }}</td>
        <td>{{ $item->p_id }}</td>
        <td>{{ $item->Name }}</td>
        <td>{{ $item->Rtype }}</td>
        <td>{{ $item->Acr }}</td>
        <td>{{ $item->Status }}</td>
        <td>{{ $item->Group }}</td>
        <td>{{ $item->Type }}</td>
      
      
        <td>
          <form action="{{ route('admin.items.destroy',$item) }}" method="POST">
          @csrf
          @method('delete')
           <button type="submit" class="btn " onclick="return confirm('Are you sure?')">Delete</button>
           <a href="{{ route('admin.items.edit', $item) }}" class="btn">Edit</a>
           <a href="{{ route('admin.items.show', $item) }}" class="btn">View</a>
          </form>

        </td>
        
        

      </tr>
      @endforeach
      
    </tbody>
  </table>
     
  {{ $items->links() }}
   
@endsection


