@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col">
                            <h1 class="text-center">Welcome <br> {{ config('app.name', 'Laravel') }}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-primary form-control" href="{{ route('login') }}">{{ __('Login') }}</a>                            
                        </div>
                        <div class="col">
                            <a class="btn btn-primary form-control" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection