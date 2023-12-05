<!-- resources/views/posts/edit.blade.php -->

<h1>Edit Post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $post->title }}" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" required>{{ $post->content }}</textarea>
    <br>
    <button type="submit">Update Post</button>
</form>

<a href="{{ route('posts.index') }}">Back to Posts</a>
