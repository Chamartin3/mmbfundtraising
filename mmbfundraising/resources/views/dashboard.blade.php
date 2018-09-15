@extends('layouts.app')

@section('content')
@include('layouts.charts')



<table class="table table-hover  table-responsive table-striped" id="donors_table" >
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Lista</th>
			<th>Telefono</th>
			<th>Email</th>
			<th>Referido Por</th>
			<th style="width: 10%">Status</th>
			<th style="width: 10%">Persona que llamó</th>
		</tr>
	</thead>
	<tbody>
		@foreach($donnors as $d)
		<tr>
			<td> <a href="{{ route('donor', $d->id) }}"> {{$d->name}}</a></td>
			<td>{{$d->origen}}</td>
			<td>{{$d->tel}}</td>
			<td>{{$d->email}}</td>
			<td>{{$d->tipo}}</td>
			<td>{!!$d->status()!!}</td>
			<td>{!!$d->caller()!!}</td>
		@endforeach


	</tbody>
</table>
<script>	
	var idioma= {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
    $('#donors_table').DataTable({
        language:   idioma,
    });
</script>
@endsection
