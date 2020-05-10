@extends('users.layouts.app')
	@section('content3')
        




    <div class="container">

        <div class="row">
    
          <div class="col-lg-3">
            <h1 class="my-4">{{ $item->p_id }}</h1>
            
            <div class="list-group">
              {{-- <a href="#" class="list-group-item active">Category 1</a>
              <a href="#" class="list-group-item">Category 2</a>
              <a href="#" class="list-group-item">Category 3</a> --}}
            </div>
          </div>
          <!-- /.col-lg-3 -->
    
          <div class="col-lg-9">
    
            <div class="card mt-4">
              @if ($item->foto1)
              <a href="{{ asset('/storage/').'/'.$item->foto1 ?? '' }}"> <img   class="img-thumbnail shadow-lg img-fluid mx-auto d-block mt-3" src="{{ asset('/storage/').'/'. $item->foto1 }}" alt="card"  width="500" >  </a>
              @endif
              <div class="card-body">
                <h3 class="card-title"> Name:  {{ $item->Name }}</h3>
                <h4>Acronym:   {{ $item->Acr }}</h4>
                <h5>Status:   {{ $item->Status }}</h5>
                <p class="card-text">Registration Type :{{  $item->Rtype}}</p>
                
     
              </div>
            </div>
            <!-- /.card -->
            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                  <p >Description</p> 
                </div>
                <div class="card-body">
                  <p>{{ $item->Desciption }}</p>
                
                 
                 
                </div>
              </div>
            <div class="card card-outline-secondary my-4">
              <div class="card-header">
                
              </div>
              <div class="card-body">
                <h5 >System Type </h5>
                <p class="text-muted">{{ $item->Stype }}</p>
                <hr>
                @if ($item->foto2)
                <a href="{{ asset('/storage/').'/'. $item->foto2 }}"><img  class="img-thumbnail shadow-lg img-fluid mx-auto d-block" src="{{ asset('/storage/').'/'. $item->foto2 }}" alt="card" width="500"></a> 
                @endif
                @if ($item->foto3)
                <a href="{{ asset('/storage/').'/'. $item->foto3 }}"><img  class="img-thumbnail shadow-lg img-fluid mx-auto d-block" src="{{ asset('/storage/').'/'. $item->foto3 }}" alt="card" width="500"></a>  
                @endif
                <hr>
                @if ($item->foto4)
                <a href="{{ asset('/storage/').'/'. $item->foto4 }}"><img  class="img-thumbnail shadow-lg img-fluid mx-auto d-block" src="{{ asset('/storage/').'/'. $item->foto4 }}" alt="card" width="500"></a>
                @endif
                @if ($item->foto5)
                <p>Instruction</p>
                <a class="text-center" href="{{ asset('/storage/').'/'.$item->foto5 ?? '' }}"> <img class="img-thumbnail shadow-lg "  src="{{ asset('/ppt.png') }}" > </a> 
                @endif
                <hr>
                <h5>Operating Plan Category</h5>
                <p class="text-muted">{{ $item->Oplan }}</p>
                <hr>
                <h5>Operating Plan Future Category</h5>
                <p class="text-muted">{{ $item->Fplan }}</p>
                <hr>
                <h5>GM Business Owner</h5>
                <p class="text-muted">{{ $item->Bowner }}</p>
                <hr>
                <h5>GM Alternate Business Owner</h5>
                <p class="text-muted">{{ $item->ABowner }}</p>
                <hr>
                <h5>GM Application Operations Owner</h5>
                <p class="text-muted">{{ $item->Oowner }}</p>
                <hr>
                <h5>GM Alternate Application Operations Owner</h5>
                <p class="text-muted">{{ $item->AOowner }}</p>
                <hr>
                <h5>GM Innovation Owner</h5>
                <p class="text-muted">{{ $item->Innovation }}</p>
                <hr>
                <h5>GM Alternate Innovation Owner</h5>
                <p class="text-muted">{{ $item->AIowner }}</p>
                <hr>
                <h5>Hosted by</h5>
                <p class="text-muted">{{ $item->Hostedb }}</p>
                <hr>
                <h5>Region</h5>
                <p class="text-muted">{{ $item->Region }}</p>
                <hr>
                <h5>Owning Country</h5>
                <p class="text-muted"{{ $item->Owninc }}</p>
                <hr>
                <h5>Country use</h5>
                <p class="text-muted"> {{ $item->Countryu }}</p>
                <hr>
                <h5>Launch date</h5>
                <p class="text-muted">{{ $item->Launchd }}</p>
                <hr>
                <h5>Inactive date</h5>
                <p class="text-muted">{{ $item->Inactived }}</p>
                <hr>
                <h5>Retire date</h5>
                <p class="text-muted">{{ $item->Retired }}</p>
                <hr>
                <h5>Cancel date</h5>
                <p class="text-muted">{{ $item->Canceld }}</p>
                <hr>
                <h5>help</h5>
                <p class="text-muted">{{ $item->help }}</p>
                <hr>
                <div class="card">
              
               
        </div>
              </div>
            </div>
            <!-- /.card -->
    
          </div>
          <!-- /.col-lg-9 -->
    
        </div>
    
      </div>



 
  
@endsection


