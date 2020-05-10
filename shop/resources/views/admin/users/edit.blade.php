@extends('admin.layouts.app')
	@section('content2')
<h1>Edit User</h1>

<form action="{{route('admin.users.update',$user)}}" method="POST">
@csrf
@method('put')
@include('admin.users.partials.create')
<button class="btn btn-primary mt-3 ml-auto" type="submit">Send</button>
</form>
@endsection
