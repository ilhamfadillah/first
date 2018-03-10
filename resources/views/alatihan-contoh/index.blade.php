<!-- Stored in resources/views/child.blade.php -->

@extends('layout.app')

@section('javascript')
<h2>jquery ui</h2>
<h3>jquery custom</h3>
@endsection

@section('content')
    @foreach($users as $user)
    <h2>{{$user->email}}</h2>
    @endforeach
    <p>This is my body content.</p>
@endsection
