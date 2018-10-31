@extends('layouts.app')
@section('title', 'Home page')
@section('sidebar')
    @parent
    <p>Ovo se drugo po redu prikaze {{$name}}</p>
@endsection

@section('content')
    <p>Ovo se trece po redu prikaze {{$name}}</p>
@endsection
