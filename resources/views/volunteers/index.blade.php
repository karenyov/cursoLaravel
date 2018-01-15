@extends('layouts.master')

@section('title', 'Form Volunteers')

@section('container')

<h1>Voluntários</h1>

<p><a href="{{route('volunteer.create')}}">Criar novo voluntário</a></p>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($volunteers as $volunteer)
        <tr>
            <td><a href="{{route('volunteer.show', $volunteer->id)}}">{{ $volunteer->name }}</a></td>
            <td>{{ $volunteer->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection