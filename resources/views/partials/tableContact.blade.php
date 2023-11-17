<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title:</th>
            <th scope="col">Description:</th>
            <th scope="col">Adress:</th>
            <th scope="col">Telephone:</th>
            <th scope="col">Email:</th>


        </tr>
    </thead>
    <tbody>
        @forelse ($myContact as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->titre }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->adresse }}</td>
                <td>{{ $item->telephone }}</td>
                <td>{{ $item->email }}</td>

                <td style="display:flex">
                    <form action="{{ route('contacts.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    {{-- show --}}
                    <a class="btn btn-primary" href="{{ route('contacts.show', $item->id) }}">Show</a>

                    {{-- edit --}}
                    <a class="btn btn-success" href="{{ route('contacts.edit', $item->id) }}">Edit</a>

                </td>
            @empty
                <p>Coming soon</p>
        @endforelse
        </tr>
    </tbody>
</table>
