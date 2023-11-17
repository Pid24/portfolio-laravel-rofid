@extends('layout.back')

@section('content')
    <h1 class="text-primary">Show</h1>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-body">
                    <h4 class="card-title">Language : {{ $id->language }}</h4>
                    <h5 class="card-subtitle mb-2 text-muted">Persentase :{{ $id->pourcentage }}</h5>
                    <p class="card-text text-success">Description: {{ $id->description }}</p>
                    <a href="{{ route('skills.index') }}" class="btn btn-success">Showr</a>

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
