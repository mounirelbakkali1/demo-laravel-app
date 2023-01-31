@extends('layout')


@section('title',"home")

@section('content')
<h1>home page</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium doloremque temporibus quod ullam, necessitatibus optio dolorem sunt beatae id labore! In, debitis omnis tenetur vitae sint corporis eaque rem ex?</p>
    <main>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @include('posts')
    </main>
@endsection
