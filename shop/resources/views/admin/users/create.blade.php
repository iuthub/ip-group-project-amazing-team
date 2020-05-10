@extends('admin.layouts.app')
	@section('content2')
<h1>Create User</h1>

<form action="{{route('admin.users.store')}}" method="POST" >
@csrf
@include('admin.users.partials.create')

<button class="btn btn-primary  mt-3">Send</button>
</form>
@endsection
