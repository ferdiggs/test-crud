<!-- resources/views/posts/index.blade.php -->

<h1>INPUT DATA MAHASISWA</h1>

<a href="{{ route('posts.create') }}"> Masukan Data Baru</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Mahasiswa</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>AKSI</th>
    </tr>
    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
