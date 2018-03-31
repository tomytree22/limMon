@section('title', 'Editar sucursal')

@section('content')
    <div class="card">
        <div class="card-header">
            Editar sucursal
        </div>
        <div class="card-body">
            {{ Form::model($sucursal, ['route' => ['sucursal.update', $sucursal->id], 'method' => 'PUT'])}}
                @include('sucursal.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
