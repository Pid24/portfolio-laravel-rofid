<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Language:</th>
            <th scope="col">Persentase:</th>
            <th scope="col">Description:</th>


        </tr>
    </thead>
    <tbody>
        @forelse ($mySkills as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->language }}</td>
                <td>{{ $item->pourcentage }}%</td>
                <td>{{ $item->description }}</td>

                <td style="display:flex">
                    <form action="{{ route('skills.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    {{-- show --}}
                    <a class="btn btn-primary" href="{{ route('skills.show', $item->id) }}">show</a>

                    {{-- edit --}}
                    <a class="btn btn-success" href="{{ route('skills.edit', $item->id) }}">edit</a>

                </td>
            @empty
                <p>Coming soon</p>
        @endforelse
        </tr>
    </tbody>
</table>
