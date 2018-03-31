@extends('template.main')

@section('title', 'Lista de Modelos')

@section('content')
    <div class="card">
        <div class="card-header">
            Lista de especialidades
        </div>
        <div class="card-body">
            <a href="{{ route('modelo.create') }}" class="btn btn-primary">Registrar nuevo Modelo</a><hr>
            @include('modelo.table')
            <div class="text-center">
                {{ $modelos->links() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    $( document ).ready(function() {
        $('.eliminarModelo').click(function(e){
            e.preventDefault();
            var form = $(this).parents('form');
            var especialidad=$(this).parents("form").find("#name")[0].value;
            //console.log(sanguineo);
            swal({
                title: "¿Seguro que desea eliminar el modelo "+especialidad+"?",
                text: "No podrá deshacer este paso.",
                type: "warning",
                showCancelButton: true,
                cancelButtonText: "Cancelar",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Confirmar",
                closeOnConfirm: false
            }, function(isConfirm){
                if (isConfirm) form.submit();
            });
        });
    });
</script>    
@endpush