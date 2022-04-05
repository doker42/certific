@extends('basic')

@section('content')

    <div class="container">

        <h3 class="text-center">LIST</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">num</th>
                    <th scope="col">course</th>
                    <th scope="col">full_name</th>
                </tr>
            </thead>
            <tbody>

            @foreach($certificates as $cert)

                <tr>
                    <td>{{$cert->num}}</td>
                    <td>{{$cert->curse}}</td>
                    <td>{{$cert->full_name}}</td>
                </tr>

            @endforeach
            </tbody>
        </table>

    </div>

@endsection
