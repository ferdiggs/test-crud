<!-- resources/views/posts/create.blade.php -->

<h1>Create Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" required></textarea>
    <br>
    <button type="submit">Create Post</button>
</form>

<a href="{{ route('posts.index') }}">Back to Posts</a>
