@extends('users.layouts.app')

@section('content3')
<ul class="list-group list-group-flush">
    <h5>Result of Search "{{ $p }}"</h5>
    @forelse ($items as $item)
       
    <li class="list-group-item bg-light" >
         <div class="row">
             <div class="col-sm-5">
                <a href="{{ route('users.show', ['id'=>$item->id]) }}" <p class="text-primary "> <i class="far fa-id-card"></i>:{{ $item->id }}|{{ $item->Name }}</p></a> 
                <div class="d-flex"><p class="text-dark"><i class="fas fa-user-friends"></i>Group:</p> <p>{{ $item->Group }}</p></div>
             </div>
             <div class="col-sm-5 mt-auto">
             <div class="d-flex"> <p class="text-dark">Owner:</p>  <a  href="{{ route('users.category', ['owner'=>$item->Bowner]) }}"><p class="text-primary">:{{ $item->Bowner }}</p></a> </div> 
             </div>
             <div class="col-sm-2 ">
                
                
                     
                    <p class="text-success"> <small>{{ $item->Status }}</small></p>
               
                    <a  class="text-primary"   href="{{ route('users.show', ['id'=>$item->id]) }}"><i class="fas fa-edit"></i>View</a>
               
          
             </div>
             
             
         </div>
        
        
    </li>

    
    {{--  <li class="list-group-item">{{ $item->p_id }}|{{ $item->Name }} <p>Group:{{ $item->Group }}</p></li>  --}}
    @empty
    <div class="alert alert-primary" >
     <strong> No data available!</strong>
   </div>
    @endforelse

  
  </ul>
@endsection
