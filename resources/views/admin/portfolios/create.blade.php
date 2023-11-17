@extends('layout.back')

@section('content')
    <h1 class="py-5 text-center text-primary">page admin Portfolios create</h1>
    <a class="btn btn-danger" href="{{ route('admin') }}">retour</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="titre" class="form-label">Title:</label>
            <input type="string" value="{{ old('titre') }}" name="titre" class="form-control" id="titre">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" value="{{ old('image') }}" name="image" class="form-control" id="image">
        </div>
        <div class="mb-3">
            <label for="imageSecond" class="form-label">Image 2:</label>
            <input type="file" value="{{ old('imageSecond') }}" name="imageSecond" class="form-control" id="imageSecond">
        </div>
        <div class="mb-3">
            <label for="imageThird" class="form-label">Image 3:</label>
            <input type="file" value="{{ old('imageThird') }}" name="imageThird" class="form-control" id="imageThird">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="string" value="{{ old('date') }}" name="date" class="form-control" id="date">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Url:</label>
            <input type="string" value="{{ old('url') }}" name="url" class="form-control" id="url">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" value="{{ old('description') }}" name="description" class="form-control" id="description">
        </div>
        <div class="mb-3">
            <label for="sujet" class="form-label">Subject:</label>
            <input type="string" value="{{ old('sujet') }}" name="sujet" class="form-control" id="sujet">
        </div>
        <div class="mb-3">
            <label for="monTexte" class="form-label">Text:</label>
            <input type="text" value="{{ old('monTexte') }}" name="monTexte" class="form-control" id="monTexte">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
