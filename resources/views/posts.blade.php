<table>
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Created at</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->created_at }}</td>
            <td style="display: flex">
                <button><a href="{{ route('posts.edit', $post->id) }}">Edit</a></button>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
