<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","blog")</title>
    {{-- asset point to files with in public directory --}}
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
</head>
<body>
    <ul class="nav">
        <li class="{{request()->routeIs('home') ? "active" : ""}}">
            <a href='{{route('home')}}' >home</a>
        </li>
        {{-- request is part of helper functions in Laravel --}}
        <li class="{{request()->routeIs('about') ? "active" :  ""}}"><a href='{{route('about')}}'>about</a></li>
        <li class="{{request()->routeIs('posts.create') ? "active" :  ""}}"><a href='{{route('posts.create')}}'>Create Post</a></li>

    </ul>
        <div class="main">
            @yield("content")
        </div>
</body>
</html>
