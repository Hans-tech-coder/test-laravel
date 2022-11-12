@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-3">
            <img src="https://raw.githubusercontent.com/WD16-KodeGo-Batch/image-sources/main/dog-photo-withApp5-small.png" class="rounded-circle" style="height: 250px; width: 250px;" alt="DogPhoto">
            <div class="col-9"></div>
        </div>
    </div>
</div>
@endsection
