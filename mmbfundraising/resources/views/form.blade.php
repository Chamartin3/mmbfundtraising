@extends('layouts.app')

@section('content')
@include('layouts.success')
<div class="container">
    <a class="btn btn-dark" name="DejardeLlamar" href="{{ route('stopcalling',$donor->id) }}">
    להפסיק לקרוא
    </a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{$donor->name}}</h1></div>
                <div class="card-body text-center">
                    @if(count($donor->calls)!==0) משלם המסים הזה כבר נקרא  @endif
                        @forelse($donor->calls as $call)
                                {!!$call->instance()!!}              
                            @empty
                            @endforelse
                    
                    
                	<div class="row">
                		  <div class="col">

                            <strong>המומלץ על ידי  </strong><p>{{$donor->origen}}</p>    {{-- ¨Recomendado por --}} 
                            </div>
                            <div class="col">
                            <strong>דוא"ל   </strong><p>{{$donor->email}}</p>  
                            </div>
                            @if($donor->prev_amount!==null)
                            <div class="col">
                            <strong>יתרומה קודמת  </strong><p>{{$donor->prev_amount}}</p>  
                          </div>
                            @endif
                        </div>
                        <div class="row">
                                <div class="col">
                                <strong>שטלפון   </strong><h2>{{$donor->tel}} </h2> 
                                </div>
                        </div>
                </div>
                        <div class="card-footer">
                                
            


                	

                 <div class="row justify-content-between">
                 	<div class="col">
                 	 <a class="btn btn-danger" name="notinteresado"  href="{{ route('no', $donor->id) }}">
                       לא מעוניין
                    </a>
                </div>
                    <div class="col">
                    <a class="btn btn-info" name="enelfuturo" href="{{ route('later',$donor->id) }}">
                        אולי בעתיד
                   
                    </a>
                </div>
                    <div class="col">
                    <a class="btn btn-warning" name="NoResponde" href="{{ route('unresponded',$donor->id) }}">
						אין מענה
                    </a>
                </div>
                    <div class="col">
                    <a class="btn btn-success"  name=contribuye data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                        תרם!
                    </a>
                </div>

                </div>
                <div class="row">
				  <div class="col">
				    <div class="collapse" id="multiCollapseExample1">
				      <div class="card card-body">
				        <form action="{{ route('donation',$donor->id) }}" method="POST">
				        	<div class="row form-inline justify-content-end">
				        		@csrf
                 				 <input type="number" class="form-control" id="monto" name="monto"  placeholder="ררומה  " required>
                 				 <button class="btn btn-success"  type="submit"> הרשם</button> 
                 				
                 				  
                 			</div>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>

			</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
