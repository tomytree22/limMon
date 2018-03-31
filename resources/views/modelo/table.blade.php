<table class="table table-responsive" id="modelos-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($modelos as $modelo)
        <tr>
            <td>{!! $modelo->id !!}</td>
            <td>{!! $modelo->modelo !!}</td>
            <td>
                {!! Form::open(['route' => ['modelo.destroy', $modelo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('modelo.edit', [$modelo->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                    <button type="submit" id="name" value="{{ $modelo->modelo }}"  class="eliminarModelo btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

