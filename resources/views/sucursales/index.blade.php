@extends('template.main')
@section('title','Sucursales')
@section('content')
<div class="card">
  <div class="card-header d-flex p-0">
    <h3 class="card-title p-3">
        <i class="fa fa-building mr-1"></i>
        Sucursales
      </h3>
    <ul class="nav nav-pills ml-auto p-2">
      <li class="nav-item">
        <a class="nav-link active" href="{!! route('suc.create') !!}">Registrar nueva sucursal</a>
      </li>
    </ul>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      <!-- Morris chart - Sales -->
      <table class="table table-striped table-bordered" id="sucursals-table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Descripción</th>
            <th>Telefono</th>
            <th colspan="3">aAction</th>
          </tr>
        </thead>
        <tbody>
          @isset($sucursales)
          <tr>
            <td colspan="6" class="text-center">Sin registros</td>
          </tr>
          @else
          @foreach($sucursales as $sucursal)
          <tr>
            <td>{!! $sucursal->nombre !!}</td>
            <td>{!! $sucursal->latitud !!}</td>
            <td>{!! $sucursal->longitud !!}</td>
            <td>{!! $sucursal->descripcion !!}</td>
            <td>{!! $sucursal->telefono !!}</td>
            <td>
              {!! Form::open(['route' => ['suc.destroy', $sucursal->id], 'method' => 'delete']) !!}
              <div class='btn-group'>
                <a href="{!! route('suc.show', [$sucursal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                <a href="{!! route('suc.edit', [$sucursal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                 {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
              </div>
              {!! Form::close() !!}
            </td>
          </tr>
          @endforeach
        @endisset
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card-body -->
</div>
@endsection
