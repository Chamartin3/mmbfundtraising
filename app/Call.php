<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
     protected $guarded = [];

      public function user()
      {     
            return $this->BelongsTo(User::class)->withTrashed();
            
      }

            public function donor()
      {     
            return $this->BelongsTo(Donor::class);
            
      }

      public function instance()
      {
      	           switch ($this->result) {
                  case 0:
                        $alertType="alert-dark";
                        break;
                  case 1:
                        $alertType="alert-warning";
                        break;
                  case 2:
                        $alertType="alert-success";

                        break;
                  case 3:
                        $alertType="alert-info";
                        break;
                  case 4:
                        $alertType="alert-danger";
                        break;
                    }

            if ($this->result ==2) {
              $monto=$this->donor->amount;
            }else{
              $monto='';
            }

      	return '
      	      	  <div class="alert '.$alertType.'" role="alert">
        	        	<div class="row">
                    <div class="col">'.$this->status().'
                    <h5><p>'.$monto.'</p></h5>
                    </div>
        	        			<div class="col">
        	        			<strong>המתקשר  </strong><p>'.$this->user->name.'</p>	
        	        			</div>
        	        			<div class="col">
                        
        	        			<strong> שם התורם  </strong><p>'.$this->donor->name.'</p>	
        	        			</div>
        	        			<div class="col">
        	        			<strong>יום </strong><p>'.$this->created_at->format('d-M-Y').'</p>	
        	        			</div>
        	        			<div class="col">
        	        			<strong>שעה   </strong><p>'.$this->created_at->format('g:ia').'</p>	
        	        			</div>
        	        	</div> </div>'
                  ;
      }

      public function status()
      {
            switch ($this->result) {
                  case 0:
                        return '<h5><span class="badge badge-dark">בלי להתקשר 
                        </span></h5>';
                        break;
                  case 1:
                        return '<h5><span class="badge badge-warning">ין מענה
                        </span></h5>';
                        break;
                  case 2:
                        return '<h5><span class="badge badge-success">!תרם  </span>
                        <br>
                        <span class="badge badge-success">'.$this->amount .'</span></h5>';

                        break;
                  case 3:
                        return '<h5><span class="badge badge-info">אולי בעתיד </span></h5>';
                        break;
                  case 4:
                        return '<h5><span class="badge badge-danger">  לא מעוניין  </span></h5>';
                        break;
      
            }
        }
            
      
}
