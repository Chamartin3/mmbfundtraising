@extends('layouts.app')

@section('content')
@include('layouts.charts')



<table class="table table-hover  table-responsive table-striped" id="donors_table" >
	<thead style="background-color: #06195E; color: #FFFFFF">
		<tr>
			<th>שם </th>
			<th>רשימה  </th>
			<th>טמספר טלפון  </th>

			<th>מומלץ על ידי  </th>
			<th style="width: 10%">מַצָב  </th>
			<th style="width: 10%">אדם שקרא  </th>
		</tr>
	</thead>
	<tbody>
		@foreach($donnors as $d)
		<tr>
			<td> <a href="{{ route('donor', $d->id) }}"> {{$d->name}}</a></td>
			<td>{{$d->origen}}</td>
			<td>{{$d->tel}}</td>

			<td>{{$d->tipo}}</td>
			<td>{!!$d->status()!!}</td>
			<td>{!!$d->caller()!!}</td>
		@endforeach


	</tbody>
</table>
<script>	
	var idioma= {
    "processing":   "מעבד...",
    "lengthMenu":   "הצג _MENU_ פריטים",
    "zeroRecords":  "לא נמצאו רשומות מתאימות",
    "emptyTable":   "לא נמצאו רשומות מתאימות",
    "info": "_START_ עד _END_ מתוך _TOTAL_ רשומות" ,
    "infoEmpty":    "0 עד 0 מתוך 0 רשומות",
    "infoFiltered": "(מסונן מסך _MAX_  רשומות)",
    "infoPostFix":  "",
    "search":       "חפש:",
    "url":          "",
    "paginate": {
        "first":    "ראשון",
        "previous": "קודם",
        "next":     "הבא",
        "last":     "אחרון"
    }
};

    $('#donors_table').DataTable({
        language:   idioma,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
    
    });
</script>
@endsection
