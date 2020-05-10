@extends('admin.layouts.app')
	@section('content2')
        


<form action="{{ route('status.search') }}" method="POST">
@csrf

	<label for="">Search</label>
	<input type="name" class="form-control" name="name"  placeholder="Search" >
	       <div class="row">
			<div class="col-sm-4">
				<label for="">Group</label>
			<select name="group" class="form-control form-control-sm w-50" required >
				<option value="0">no</option>
				@foreach ($Groups as $Group)
				<option>{{ $Group->name  }}</option>
				@endforeach
			</select>
			</div>
			
			<div class="col-sm-4">
				<label for="">Status</label>
			<select name="status" class="form-control form-control-sm  w-50" required>
				<option value="0">no</option>
				@foreach ($statuses as $status)
				<option>{{ $status->name  }}</option>
				@endforeach
				</select>
			</div>
			
				<div class="col-sm-4">
					<label for="">Types</label>
					<select name="type" class="form-control form-control-sm  w-50" required>
						<option value="0">no</option>
						@foreach ($Types as $type)
						<option>{{ $type->name  }}</option>
						@endforeach
					</select>
				</div>
		

		   </div>
		


		
		<button class="btn btn-primary  mt-3" type="submit">Send</button>
		</form>

		
@if (isset($items))
	

		<table class="table table-striped mt-5">
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
				<th scope="col">Desciption</th>
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
				<td>{{ $item->Desciption }}</td>
			  
				<td>
				  {{--  <form action="{{ route('admin.items.destroy',$item) }}" method="POST">
				  @csrf
				  @method('delete')
				   <button type="submit" class="btn ">Delete</button>
				   <a href="{{ route('admin.items.edit', $item) }}" class="btn">Edit</a>  --}}
				   <a href="{{ route('admin.items.show', $item) }}" class="btn">View</a>
				  {{--  </form>  --}}
		
				</td>
				
				
		
			  </tr>
			  @endforeach
			  
			</tbody>
		  </table>
		  @endif		
@endsection
