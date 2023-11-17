@extends('layout.back')


@section('content')
    <div class="row" id="table-head">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center">MailBox </h2>
                </div>
                <div class="card-content container">

                    <div class="my-4">
                        <div class="row">
                            @forelse ($mails->reverse() as $item)
                                <div class="col-12">
                                    <div class="row border my-2">
                                        <div class="col-1 d-flex justify-content-center align-items-center">
                                            <form action="{{ route('mailbox.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">X</button>
                                            </form>
                                        </div>
                                        <div class="col-9">
                                            <button type="button" class="btn w-100" data-bs-toggle="modal"
                                                data-bs-target="#show-{{ $item->id }}">
                                                <p>Author : {{ $item->titre }}</p>
                                                <p>Message :{{ $item->description }}</p>
                                            </button>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            {{ $item->created_at->format('d-m-Y H:s') }}
                                        </div>
                                    </div>
                                </div>
                                @include('partials.modal-mail')
                            @empty
                                <p class="text-center">Mailbox</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
