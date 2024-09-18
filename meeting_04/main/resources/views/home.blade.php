@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center" style="background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%); color: white; border-radius: 10px 10px 0 0;">
                    <h4>{{ __('Dashboard') }}</h4>
                </div>

                <div class="card-body text-center" style="background-color: #f9f9f9; border-radius: 0 0 10px 10px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('You are logged in!') }}</p>
                    
                    <a href="/dashboard" class="btn btn-primary btn-lg mb-2" style="background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%); border: none;">
                        Go to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
