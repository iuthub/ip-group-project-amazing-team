@extends('admin.layouts.app')
	@section('content2')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">User {{ $count_categories }}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Items {{ $count_articles }}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Visitors 0 </span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Today 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-dark btn-block" href="{{route('admin.users.create')}}">Creat User</a>
                @foreach ($categories as $category)
                <a class="group-list-item" href="{{ route('admin.users.edit',$category) }}">
                    <h4 class="group-list-item-heading">{{ $category->name }}</h4> 
                    {{--  <p class="group-list-item-heading">{{ $category->Articles()->pluck('title')->implode(',') }}</p>  --}}
                 </a> 
                @endforeach
            </div>
            <div class="col-sm-6">
                <a class="btn btn-dark btn-block" href="{{route('admin.items.create') }}">Creat Items</a>
                @foreach ($articles as $article)
                <a class="group-list-item" href="{{ route('admin.items.edit',$article) }}">
                    <h4 class="group-list-item-heading">{{ $article->Name }}</h4> 
                    {{--  <p class="group-list-item-heading">{{ $article->Categories()->pluck('title')->implode(',') }}</p>  --}}
                 </a> 
                @endforeach
            </div>
        </div>
    </div>
@endsection