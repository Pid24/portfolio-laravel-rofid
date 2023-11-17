@extends('layout.back')

@section('content')
    <div class="d-flex">
        @include('partials.navAdmin')
        <div class="">
            <a class="btn btn-warning" href="{{ route('contacts.index') }}">Retour</a>
            <h1 class="text-center text-danger py-5">Page Admin/ Contacts-Edit</h1>

            <form action="{{ route('contacts.update', $id->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="titre" class="form-label">Title:</label>
                    <input type="string" name="titre" value="{{ $id->titre }}" class="form-control" id="titre">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" name="description" value="{{ $id->description }}" class="form-control"
                        id="description">
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Adress:</label>
                    <input type="string" name="adresse" value="{{ $id->adresse }}" class="form-control" id="adresse">
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Telephone:</label>
                    <input type="string" name="telephone" value="{{ $id->telephone }}" class="form-control" id="telephone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="string" name="email" value="{{ $id->email }}" class="form-control" id="email">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endsection
