@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://avatars2.githubusercontent.com/u/49154920?s=460&u=9283442260ae0ba76648a0d24bad0cbcd6f84e09&v=4" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->userID }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>107</strong> posts</div>
                <div class="pr-5"><strong>19k</strong> followers</div>
                <div class="pr-5"><strong>356</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}/</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://hellojohnwoo.github.io/images/booksLP/book1.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://hellojohnwoo.github.io/images/docker01/1.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://hellojohnwoo.github.io/images/docker01/3.png" class="w-100">
        </div>
    </div>

</div>
@endsection
