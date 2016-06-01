@extends('layouts.master')

@section('content')


        <h1>Home Page</h1>

        <p>
            This is some generic text.
        </p>
        <ul>
            @for($i = 0; $i < 10; $i++)
                @if($i % 2 == 0)
                    <li>Iteration {{ $i + 1 }}</li>
                @endif
            @endfor
        </ul>
        <br><br><br>

        <a href="{{ route('niceaction', ['action' => 'greet']) }}">Greet</a>
        <a href="{{ route('niceaction', ['action' => 'hug']) }}">Hug</a>
        <a href="{{ route('niceaction', ['action' => 'kiss']) }}">Kiss</a>

        <br><br><br>

        <form action="{{ route('benice') }}" method="post">

            <label for="select-section">I want to...</label>

            <select id="select-action" name="action">
                <option value="greet">Greet</option>
                <option value="hug">Hug</option>
                <option value="kiss">Kiss</option>
            </select>

            <input type="text" name="name"/>

            <button type="submit">Do a Nice Action</button>

            <input type="hidden" value="{{ Session::token() }}" name="_token" />

        </form>


@endsection