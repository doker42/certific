@extends('basic')

@section('content')
    <div class="container text-center">
        <br>
        <h3>Download Certificate</h3>
        <br>
        <h4>Certificate is ready, You can dowwload it</h4>
        <br>
        <div>
            <a href="{{route('load_pdf', ['certificate' => $certificate])}}" class="btn btn-success">LOAD PAGE</a>
        </div>
        <br>
        <br>

        <div>
            <a href="{{route('start')}}" class="btn btn-secondary">START PAGE</a>
        </div>
    </div>
@endsection
