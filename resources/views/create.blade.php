@extends("layout")

@section('title','create a post')

@section('content')
<h1>Create blog posts</h1>
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div>
        <label for="">Title</label>
        <input type="text" name="title">
        @error('title')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="">description</label>
        <textarea rows="15"  name="description"></textarea>
        @error('description')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Create </button>
</form>
@endsection
