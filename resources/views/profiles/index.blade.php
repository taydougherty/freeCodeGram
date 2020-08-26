@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://cdn.changelog.com/uploads/icons/news_sources/Qo/icon_large.png?v=63680075631" class="rounded-circle" style="height: 125px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>318</strong> posts</div>
                <div class="pr-5"><strong>54.8k</strong> followers</div>
                <div class="pr-5"><strong>281</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)

        <div class="col-4">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        @endforeach
    </div>
</div>

@endsection
