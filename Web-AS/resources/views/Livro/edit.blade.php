<form action="{{ url('Livro/'.$Livro->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Title" value="{{ $Livro->title }}" required>
    <input type="text" name="author" placeholder="Author" value="{{ $Livro->author }}" required>
    <input type="number" name="publication_year" placeholder="Publication Year" value="{{ $Livro->publication_year }}" required>
    <input type="text" name="gender" placeholder="gender" value="{{ $Livro->gender }}" required>
    <button type="submit">Update Livro</button>
</form>

