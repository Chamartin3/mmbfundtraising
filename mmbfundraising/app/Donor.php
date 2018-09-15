<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
      protected $guarded = [];

      public function user()
      {     
            return $this->BelongsTo(User::class);
            
      }

      public function caller()
      {     
            if ($this->status!==0) {
                  return $this->user->name;
      	}else{
      	     return "בלי להתקשר ";
      	}
      	
      }

      public function status()
      {
            switch ($this->status) {
                  case 0:
                        return '<h5><span class="badge badge-dark">בלי להתקשר 
                        </span></h5>';
                        break;
                  case 1:
                        return '<h5><span class="badge badge-warning">ין מענה
                        </span></h5>';
                        break;
                  case 2:
                        return '<h5><span class="badge badge-success">תרם!  </span>
                        <br>
                        <span class="badge badge-success">'.$this->amount .'</span></h5>';

                        break;
                  case 3:
                        return '<h5><span class="badge badge-info">אולי בעתיד </span></h5>';
                        break;
                  case 4:
                        return '<h5><span class="badge badge-danger">  לא מעוניין</span></h5>';
                        break;
      
            }
            
      }

      public function calls()
      {     
            return $this->hasMany(Call::class);
            
      }

      public static function TotalCalls()
      {
            return Call::count();
      }

      public static function TotalColected()
      {
            return Donor::sum('amount');
      }

            public static function NotInterested()
      {
            return Donor::where('status',4)->count();
      }

            public static function Donated()
      {
            return Donor::where('status',2)->count();
      }

            public static function Later()
      {
           return Donor::where('status',3)->count();
      }
            public static function NotRespond()
      {
            return Donor::where('status',1)->count();
      }
            public static function NotCalled()
      {
            return Donor::where('status',0)->count();
      }


}
