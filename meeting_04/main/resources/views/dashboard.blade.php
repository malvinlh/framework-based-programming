<!-- resources/views/home.blade.php -->
@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome to the Home Page</h1>
    <p>Select a calculator below:</p>

    <div class="mt-4">
        <a href="/GetCalc1" class="btn btn-primary btn-lg mb-2">Go to Calculator Get 1</a>
        <a href="/GetCalc2" class="btn btn-secondary btn-lg mb-2">Go to Calculator Get 2</a>
        <a href="/GetCalc3" class="btn btn-success btn-lg mb-2">Go to Calculator Get 3</a>
        <a href="/PostCalc1" class="btn btn-warning btn-lg mb-2">Go to Calculator Post 1</a>
        <a href="/PostCalc2" class="btn btn-danger btn-lg mb-2">Go to Calculator Post 2</a>
    </div>
@endsection