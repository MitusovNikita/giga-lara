@extends('layouts.app')

@section('title', 'Сотрудники')

@section('content')
    <h3>Пользователи</h3>

    @foreach($allEmployees as $employee)
        <p>{{ $employee->id }} - {{ $employee->name }}</p>
    @endforeach

@endsection
