@foreach($Livro as $entity)
    <div>
        <h3>{{ $entity->title }}</h3>
        <p>{{ $entity->author }}</p>
        <p>{{ $entity->publication_year }}</p>
        <p>{{ $entity->gender }}</p>
        <a href="{{ url('Livro/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('Livro/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
