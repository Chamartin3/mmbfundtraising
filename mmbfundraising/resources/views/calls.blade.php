@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
        	<div class="card">
        	    <div class="card-header">Calls Log</h1></div>
        	        <div class="card-body">
        	        	@forelse($calls as $call)
        	        	{!!$call->instance()!!}
    
        	        	
        	        	@empty
        	        	No hay llamadas
        	        	@endforelse
        	         </div>
        	</div>
       </div>
    </div>

@endsection