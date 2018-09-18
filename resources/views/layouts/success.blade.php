<link href="{{ asset('css/toast.css') }}" rel="stylesheet" type="text/css">




@if (session('success'))
<div id="snackbar"> בהצלחה!   {{ session('success') }}</div>

<script>
var success=true;
@else
<script>
var success=false;

@endif

if (success=true) {
    window.onload=MostrarNotificacion();
}



 function MostrarNotificacion() {

    var x = document.getElementById("snackbar");
    
    x.className = "show";

    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

  
</script>