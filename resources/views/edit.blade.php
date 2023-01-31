@extends("layout")

@section('title',"edit a post")

@section('content')
    <h1>Edit blog post id : {{ $post->id }}</h1>
    <form action="{{route('posts.update', $post->id)}}" method="post">
        @csrf
        @method('put')
        <div>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <input type="text" name="description" value="{{ $post->description }}">
        </div>
        <button type="button"><a href="{{route('home')}}">cancle</a></button>
        <button type="submit">save changes</button>
    </form>
@endsection
