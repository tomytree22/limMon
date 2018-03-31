@extends('template.main')

@section('title', 'Editar Modelo')

@section('content')
    <div class="card">
        <div class="card-header">
            Editar Modelo
        </div>
        <div class="card-body">
            {!! Form::model($modelo, ['route' => ['modelo.update', $modelo->id], 'method' => 'PUT']) !!}
                @include('modelo.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection