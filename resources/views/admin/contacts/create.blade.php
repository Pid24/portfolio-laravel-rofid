@extends('layout.back')

@section('content')
    <h1 class="py-5 text-center text-primary">Page Admin Contacts Create</h1>
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

    <form action="{{ route('contacts.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="titre" class="form-label">Title:</label>
            <input type="string" value="{{ old('titre') }}" name="titre" class="form-control" id="titre">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" value="{{ old('description') }}" name="description" class="form-control" id="description">
        </div>

        <div class="mb-3">
            <label for="adresse" class="form-label">Adress:</label>
            <input type="string" value="{{ old('adresse') }}" name="adresse" class="form-control" id="adresse">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Telephone:</label>
            <input type="string" value="{{ old('telephone') }}" name="telephone" class="form-control" id="telephone">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="string" value="{{ old('email') }}" name="email" class="form-control" id="email">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
