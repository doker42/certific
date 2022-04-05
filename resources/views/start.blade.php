@extends('basic')

@section('content')

    <div class="container text-center">
        <br>
        <a href="{{ route('form') }}" class="btn btn-primary">create certificate</a>
        <br>
        <br>
        <a href="{{ route('list') }}" class="btn btn-success">list</a>
    </div>

@endsection
