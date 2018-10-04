@extends('layouts.app')

@section('content')
@include('layouts.success')
<style type="text/css">
    
@media screen and (max-width: 1000px) {
    .respoboton {   
        margin-bottom: 40px;
    }
}


</style>

<div class="container">
    <a class="btn btn-dark" name="DejardeLlamar" href="{{ route('stopcalling',$donor->id) }}">
        יציאה מהמערכת  
    </a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right"><h1>{{$donor->name}}</h1></div>
                <div class="card-body text-center">
                    @if(count($donor->calls)!==0) משלם המסים הזה כבר נקרא  
                    @endif
                        @forelse($donor->calls as $call)
                                {!!$call->instance()!!}              
                            @empty
                            @endforelse
                    
                    
                	<div class="row text-right">
                		  <div class="col">

                            <strong> הומלץ על ידי   </strong><p>{{$donor->origen}}</p>    {{-- ¨Recomendado por --}} 
                            </div>
                         
                            @if($donor->prev_amount!==null)
                            <div class="col">
                            <strong>יתרומה קודמת  </strong><p>{{$donor->prev_amount}}</p>  
                          </div>
                            @endif
                        </div>
                        <div class="row">
                                <div class="col respoboton">
                                    <a href="tel:{{$donor->tel}}">
                                <strong> טלפון   </strong><h2>{{$donor->tel}} </h2> 
                                </div></a>
                        </div>
                </div>
                        <div class="card-footer">
                                
            


                	

                 <div class="row justify-content-between">
                 	<div class="col text-center respoboton">
                 	 <a class="btn btn-danger enviar" name="notinteresado"  href="{{ route('no', $donor->id) }}">
                       לא מעוניין
                    </a>
                </div>
                    <div class="col text-center respoboton">
                    <a class="btn btn-info enviar" name="enelfuturo" href="{{ route('later',$donor->id) }}">
                        אולי בעתיד
                   
                    </a>
                </div>
                    <div class="col text-center respoboton">
                    <a class="btn btn-warning enviar" name="NoResponde" href="{{ route('unresponded',$donor->id) }}">
						אין מענה
                    </a>
                </div>
                    <div class="col text-center respoboton">
                    <a class="btn btn-success"  name=contribuye data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                       !תרם
                    </a>
                </div>

                </div>
                <div class="row">
				  <div class="col">
				    <div class="collapse" id="multiCollapseExample1">
				      <div class="card card-body">
				        <form id="donationform" action="{{ route('donation',$donor->id) }}" method="POST">
				        	<div class="row form-inline justify-content-end">
				        		@csrf
                 				 <input type="number" class="form-control" id="monto" name="monto"  placeholder="תרומה  " required>
                 				 <button class="btn btn-success  enviarsub"  type="submit">רשום</button> 
                 				 
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

<script> 

var confirmacion = true;


$('.enviar').on('click', function(event) {
     var loc= $(this).attr('href');
    if (confirmacion) {
     event.preventDefault();
     swal({
          title: '?האם אתה בטוח ',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#03D617',
          cancelButtonColor: '#d33',
          cancelButtonText: 'ביטול ',
          confirmButtonText: '!אישור  '
        }).then((result) => {
          if (result.value) {
            confirmacion=false;
            window.location = loc;
          }
        })
    }
});  




var confirmacionsub = true;
$('.enviarsub').on('click', function(event) {
    if (confirmacionsub) {
     event.preventDefault();
     swal({
          title: 'האם אתה בטוח? ',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#03D617',
          cancelButtonColor: '#d33',
          cancelButtonText: 'ביטול ',
          confirmButtonText: 'לאשר  '
        }).then((result) => {
          if (result.value) {
            confirmacionsub=false;
            $(this).trigger('click');

          }
        })
    }    
});  

</script>



@endsection
