@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/larvelLogo.png" class="rounded-circle" height="150"/>
        </div>
        <div class="col-9 pt-5">
            <div><h1>Laravel</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>100</strong> posts</div>
                <div class="pr-5"><strong>100k</strong> followers</div>
                <div class="pr-5"><strong>100k</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">laravel.com</div>
            <div>Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</div>
            <div><a href="laravel.com">www.laravel.com</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/images/laravel7.jpg" class="w-100" />
        </div>
        <div class="col-4">
            <img src="/images/laravel7.jpg" class="w-100" />
        </div>
        <div class="col-4">
            <img src="/images/laravel7.jpg" class="w-100" />
        </div>
    </div>
</div>
@endsection
