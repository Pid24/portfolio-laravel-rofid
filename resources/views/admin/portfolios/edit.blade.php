@extends('layout.back')

@section('content')
    <div class="d-flex">
        @include('partials.navAdmin')
        <div class="">
            <a class="btn btn-warning" href="{{ route('skills.index') }}">Retour</a>
            <h1 class="text-center text-danger py-5">Page Admin/ Skills-Edit</h1>

            <form action="{{ route('portfolios.update', $id->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="titre" class="form-label">Title:</label>
                    <input type="string" name="titre" value="{{ $id->titre }}" class="form-control" id="titre">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="string" name="image" value="{{ $id->image }}" class="form-control" id="image">
                </div>
                <div class="mb-3">
                    <label for="imageSecond" class="form-label">Image 2:</label>
                    <input type="string" name="imageSecond" value="{{ $id->imageSecond }}" class="form-control"
                        id="imageSecond">
                </div>
                <div class="mb-3">
                    <label for="imageThird" class="form-label">Image 3:</label>
                    <input type="string" name="imageThird" value="{{ $id->imageThird }}" class="form-control"
                        id="imageThird">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date:</label>
                    <input type="string" name="date" value="{{ $id->date }}" class="form-control" id="date">
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">Url:</label>
                    <input type="string" name="url" value="{{ $id->url }}" class="form-control" id="url">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" name="description" value="{{ $id->description }}" class="form-control"
                        id="description">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endsection
