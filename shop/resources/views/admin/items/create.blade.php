@extends('admin.layouts.app')
	@section('content2')
<h1>create</h1>
<form action="{{route('admin.items.store')}}" method="POST"  enctype="multipart/form-data">
@csrf
@include('admin.items.partials.create')

<button class="btn btn-primary mt-3" type="submit">Send</button>
</form>
@endsection
