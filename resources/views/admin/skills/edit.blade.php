@extends('layout.back')

@section('content')
    <div class="d-flex">
        @include('partials.navAdmin')
        <div class="">
            <a class="btn btn-warning" href="{{ route('skills.index') }}">Show</a>
            <h1 class="text-center text-danger py-5">Page Admin/ Skills-Edit</h1>

            <form action="{{ route('skills.update', $id->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="language" class="form-label">Language:</label>
                    <input type="string" name="language" value="{{ $id->language }}" class="form-control" id="language">
                </div>
                <div class="mb-3">
                    <label for="pourcentage" class="form-label">Persentase:</label>
                    <input type="number" name="pourcentage" value="{{ $id->pourcentage }}" class="form-control"
                        id="pourcentage">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" name="description" value="{{ $id->description }}" class="form-control"
                        id="description">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
@endsection
