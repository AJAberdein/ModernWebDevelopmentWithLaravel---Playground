@extends('layouts.master')


@section('content')


    <h1>I {{ $action }} {{ $name === null ? 'you' : $name}}!</h1>


@endsection