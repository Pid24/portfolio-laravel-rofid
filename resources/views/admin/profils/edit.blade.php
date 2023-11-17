@extends('layout.back')

@section('content')
    <div class="d-flex">
        @include('partials.navAdmin')
        <div class="">
            <a class="btn btn-warning" href="{{ route('profils.index') }}">Show</a>
            <h1 class="text-center text-danger py-5">Page Admin/ Profile-Edit</h1>
            @include('partials.forms-edit')
        </div>

    </div>
@endsection
