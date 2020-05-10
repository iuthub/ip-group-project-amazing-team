<!doctype html>
<html lang="en">
  <head>
  	<title>ASMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/e7a9e3ff24.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <title>{{ config('app.name', 'ASMS') }}</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
  </head>
  <body>
  
		 
		<div class=" d-md-flex align-items-stretch ">
     
      <div id="content" class="p-4 p-md-5 pt-5 ">
        <button type="button" id="sidebarCollapse" class="btn btn-dark">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
        <a class="ml-5"  href="{{ route('index') }}">  <img class="ml-5"  src="{{ asset('main.jpeg') }}" alt="" width="700px" height="60px" class="mb-5 text-center"></a> 

        {{--  @if ($name)
        <p class=" text-center mb-5">Welcome ,{{ $name }}</p>
        @else  --}}
        <p class=" text-center mb-5">Welcome </p> 
        {{--  @endif  --}}
        
        <hr>
     
        @yield('content3')
    
      </div>

      <nav id="sidebar" class="new_body">
        <div class="ml-2 mt-4">
         <a class="new_body" href="{{ route('index') }}"><img src="{{ asset('logo1.png') }}" alt="" width="250px"  class="mb-4"></a> 
          <h5 class="text-primary">Search</h5>
          <form action="{{ route('users.search') }}" method="POST" class="subscribe-form">
            <div class="form-group d-flex">
              <div class="icon"><span class="icon-paper-plane"></span></div>
              
                @csrf
                <input type="text" name="name" class="form-control" placeholder="Search" required >
                <button type="submit" class="btn">Search</button>
           
             
              
            </div>
          </form>
        </div>
				<div class="p-4 pt-5">
					<h5 class="text-primary">Categories</h5>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Group</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu1">
                @forelse ($Groups as $group)
                <li><a  href="{{ route('users.category', ['group'=>$group->name]) }}"><span class="fa fa-chevron-right mr-2"></span> {{ $group->name }}</a></li>
                
                @empty
                <h1>Empty</h1> 
                @endforelse
               
               
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Status</a>
	            <ul  class="collapse list-unstyled " id="pageSubmenu2">
                @forelse ($statuses as $status)
                <li><a  href="{{ route('users.category', ['status'=>$status->name]) }}"><span class="fa fa-chevron-right mr-2"></span> {{ $status->name }}</a></li>
                @empty
                <h1>Empty</h1> 
                @endforelse
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Type</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu3">
                @forelse ($Types as $type)
                <li ><a  href="{{ route('users.category', ['type'=>$type->name]) }}"><span class="fa fa-chevron-right mr-2"></span> {{ $type->name }}</a></li>
                @empty
                <h1>Empty</h1> 
                @endforelse
	            </ul>
	          </li>
	          {{-- <li>
	            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clothes</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu4">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jeans</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> T-shirt</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jacket</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Shoes</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sweater</a></li>
	            </ul>
	          </li> --}}
	        </ul>
					<div class="mb-5">
						<h5 class="text-primary">Tag Cloud</h5>
            <div class="tagcloud ">
              <a href="{{ route('users.category', ['status'=>'Active']) }}" class="tag-cloud-link">Active</a>
              <a href="{{ route('users.category', ['status'=>'Passive']) }}" class="tag-cloud-link">Passive</a>
              <a href="{{ route('users.category', ['type'=>'Sharepoint']) }}" class="tag-cloud-link">Sharepoint</a>
              {{--  <a href="{{ route('users.category', ['type'=>$type->name]) }}" class="tag-cloud-link">sweet</a>
              <a href="{{ route('users.category', ['type'=>$type->name]) }}" class="tag-cloud-link">tasty</a>
              <a href="{{ route('users.category', ['type'=>$type->name]) }}" class="tag-cloud-link">delicious</a>
              <a href="{{ route('users.category', ['type'=>$type->name]) }}" class="tag-cloud-link">desserts</a>
              <a href="{{ route('users.category', ['type'=>$type->name]) }}" class="tag-cloud-link">Passive</a>  --}}
            </div>
					</div>
					
	      </div>
    	</nav>
		</div>

 
      <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
  </body>
</html>