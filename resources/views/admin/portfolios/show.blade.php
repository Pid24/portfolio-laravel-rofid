@extends('layout.back')

@section('content')
    <h1 class="text-primary">show</h1>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-body">
                    <h4 class="card-title">Title : {{ $id->titre }}</h4>
                    <h5 class="card-subtitle mb-2 text-muted">Image :{{ $id->image }}</h5>
                    <h5 class="card-subtitle mb-2 text-muted">Image :{{ $id->imageSecond }}</h5>
                    <h5 class="card-subtitle mb-2 text-muted">Image :{{ $id->imageThird }}</h5>
                    <p class="card-text text-success">Date: {{ $id->date }}</p>
                    <p class="card-text text-success">Url: {{ $id->url }}</p>
                    <span class="card-title">Description: {{ $id->description }}</span>

                    <a href="{{ route('portfolios.index') }}" class="btn btn-success">Show</a>

                    <form action="{{ route('portfolios.destroy', $id->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
