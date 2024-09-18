@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); box-shadow: 0px 4px 20px rgba(0,0,0,0.1); border-radius: 15px;">
                <div class="card-header text-white text-center" style="font-size: 24px; font-weight: bold;">{{ __('Reset Password') }}</div>

                <div class="card-body" style="color: #fff;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; border-radius: 10px; padding: 10px;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="background-color: #fff; color: #333; border-radius: 10px; padding: 10px;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="color: #ff5c5c;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-light" style="background-color: #ff7f50; border-color: #ff7f50; color: white; padding: 10px 20px; border-radius: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                                    {{ __('Send Password Reset Link') }}
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
