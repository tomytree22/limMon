@section('title', 'Nueva sucursal')

@section('content')
    <div class="card">
        <div class="card-header">
            Nueva sucursal
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'sucursal.store']) !!}
                @include('sucursales.fields')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
