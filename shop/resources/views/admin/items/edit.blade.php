@extends('admin.layouts.app')
	@section('content2')
<h1>create</h1>
<form action="{{route('admin.items.update',$item)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
@include('admin.items.partials.create')
<button class="btn btn-primary mt-3 ml-auto" type="submit">Send</button>
</form>
@endsection
