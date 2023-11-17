@extends('layout.back')

@section('content')
    <h1 class="py-5 text-center text-primary">Page Admin Skills Create</h1>
    <a class="btn btn-danger" href="{{ route('admin') }}">Show</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('skills.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="language" class="form-label">Language:</label>
            <input type="string" value="{{ old('language') }}" name="language" class="form-control" id="language">
        </div>
        <div class="mb-3">
            <label for="pourcentage" class="form-label">Persentase:</label>
            <input type="number" value="{{ old('pourcentage') }}" name="pourcentage" class="form-control" id="pourcentage">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" value="{{ old('description') }}" name="description" class="form-control" id="description">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
