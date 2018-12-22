@extends('layout')

@section('title')

welcome home!!

@endsection

@section('content')

<h1>hey fucko!</h1> 


@foreach($tasks as $task)

    <li>{{ $task }}</li>

@endforeach

@endsection