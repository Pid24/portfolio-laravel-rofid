@extends('layout.back')

@section('content')
    <h1>Show</h1>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-body">
                    <h4 class="card-title">Name : {{ $id->nom }}</h4>
                    <h5 class="card-subtitle mb-2 text-muted">Country :{{ $id->prenom }}</h5>
                    <span class="card-title text-primary">Age: {{ $id->age }}</span>
                    <p class="card-text text-success">Profile: {{ $id->titre }}</p>
                    <p class="card-subtitle mb-2 text-muted">Email: {{ $id->email }}</p>
                    <p class="card-text text-danger">Telephone: {{ $id->telephone }}</p>

                    <a href="{{ route('profils.index') }}" class="btn btn-success">Show</a>

                    <form action="{{ route('profils.destroy', $id->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
