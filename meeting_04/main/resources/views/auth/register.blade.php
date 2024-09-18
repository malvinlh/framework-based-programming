@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); box-shadow: 0px 4px 20px rgba(0,0,0,0.1); border-radius: 15px;">
                <div class="card-header text-white text-center" style="font-size: 24px; font-weight: bold;">{{ __('Register') }}</div>

                <div class="card-body" style="color: #fff;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="background-color: #fff; color: #333; border-radius: 10px; padding: 10px;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert" style="color: #ff5c5c;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="background-color: #fff; color: #333; border-radius: 10px; padding: 10px;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="color: #ff5c5c;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="background-color: #fff; color: #333; border-radius: 10px; padding: 10px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="color: #ff5c5c;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="background-color: #fff; color: #333; border-radius: 10px; padding: 10px;">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-light" style="background-color: #ff7f50; border-color: #ff7f50; color: white; padding: 10px 20px; border-radius: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
