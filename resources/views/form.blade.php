@extends('basic')

@section('content')

    <div class="container text-center">

        <div>
            <a href="{{route('start')}}" class="btn btn-secondary">START PAGE</a>
        </div>

        <h3>FORM</h3>

        <div class="row">

            <form action="{{route('create')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="num" class="form-label">Number</label>
                    <input type="number" name="num" class="form-control" id="num" placeholder="Input Number">
                </div>
                <label for="curse" class="form-label">Curse name</label>
                <div class="mb-3">
                    <select class="form-select" name="curse" aria-label="Select curse">
                        @foreach($curses as $curse)
                            <option value="{{$curse}}">{{$curse}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="first_name" class="form-label">First name</label>
                    <input class="form-control" name="first_name" id="first_name" placeholder="Input first name"></input>
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input class="form-control" name="surname" id="surname" placeholder="Input surname"></input>
                </div>
                <div class="mb-2">
                    <label for="graduated" class="form-label">Graduated date</label>
                    <input id="graduated" name="graduated" class="date form-control" type="text">
                </div>
                <div class="mb-2">
                    <button type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $('.date').datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>

@endsection
