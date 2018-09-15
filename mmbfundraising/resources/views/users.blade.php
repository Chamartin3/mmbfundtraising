@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
        	            <div class="card">

<table class="table table-hover  table-striped" id="donors_table" >
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Email</th>
			<th>Llamadas</th>
			<th>Borrar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $u)
		<tr>
			<td>{{$u->name}}</td>
			<td>{{$u->email}}</td>
			<td><a  href="{{ route('calls',$u->id) }}" >{{count($u->calls)}} </a> </td>
			<td><a  href="{{ route('userdelete',$u->id) }}" class="botborr btn btn-danger"><i class="fas fa-trash"></i></td>
		@endforeach
</tr>

	</tbody>
</table>
</div>

</div>
</div>

@endsection