@extends('template.main')

@section('title', 'Nuevo Modelo')

@section('content')
    <div class="card">
        <div class="card-header">
            Nuevo Modelo
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'modelo.store']) !!}
                @include('modelo.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
