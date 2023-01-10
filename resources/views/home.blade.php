@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Session::has("message"))
                        <div class="alert alert-{{ Session::get("message_type") }}" role="alert">
                            {{ Session::get("message") }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                    <div class="d-flex flex-row p-5">
                        @forelse ( $cours as $cour )
                        <div class="card d-flex flex-column p-2 w-100 m-2">
                            <div class="d-flex flex-column w-100">
                                <img src="{{ asset($cour->imgpath) }}" class="card m-2" width="200px" height="200px" alt="">
                                <h4>{{ $cour->titre }}</h4>
                                <p>{{ $cour->description }}</p>

                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <h4>{{ $cour->formateur->nom }}</h4>
                                <span>{{ $cour->prix }}</span>
                            </div>
                            <form action="{{ route("cour.destroy",["cour"=> $cour->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item text-danger delete-record">Delete</button>
                            </form>
                        </div>
                        @empty
                        <div class="d-flex">
                            <span>Pas De Formation</span>
                        </div>
                    @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
