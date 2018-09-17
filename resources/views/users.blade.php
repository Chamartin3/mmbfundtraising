@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
        	            <div class="card">

<table class="table table-hover  table-striped" id="donors_table" >
	<thead style="background-color: #06195E; color: #FFFFFF">
		<tr>
			<th>שם   </th>
			<th>דוא"ל  </th>
			<th>שיחות שבוצעו  </th>
			<th>  הקלד   </th>			
			<th>   הרשאות שינוי  </th>
			<th>למחוק משתמש  </th>
	

		</tr>
	</thead>
	<tbody>
		@foreach($users as $u)
		<tr>
			<td>{{$u->name}}</td>
			<td>{{$u->email}}</td>
			<td><a  href="{{ route('calls',$u->id) }}" >{{count($u->calls)}} </a> </td>
			<td>{!!$u->tipo()!!} </td>			
			<td><a  href="{{ route('useredit',$u->id) }}" class="botborr btn btn-warning"><i class="fas fa-pencil-alt"></i></td>
			<td><a  href="{{ route('userdelete',$u->id) }}" class="botborr btn btn-danger"><i class="fas fa-trash"></i></td>


		@endforeach
</tr>

	</tbody>
</table>
</div>

</div>
</div>

@endsection