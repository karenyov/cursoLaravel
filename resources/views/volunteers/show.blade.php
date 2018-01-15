@extends('layouts.master')

@section('title', 'Form Volunteers')

@section('container')

<p>Nome: {{$volunteer->name}}</p>
<p>Telefone: {{$volunteer->phone}}</p>
<p>Email: {{$volunteer->email}}</p>

<p><a href="{{route('volunteer.index')}}">Voltar para página inicial</a></p>

@endsection