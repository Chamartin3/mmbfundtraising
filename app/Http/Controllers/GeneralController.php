<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\Call;
use App\User;
use Auth;

class GeneralController extends Controller
{
    public function list()
    {
    	$donnors=Donor::all();
    	return view('dashboard',['donnors'=>$donnors]);
    }

    public function stopcalling($id)
    {
        $caso=Donor::find($id);
        $caso->status=0;
        $caso->save();
        return  view('welcome');
    }

    public function form()
    {
    	$caso=Donor::where('status',0)->first();
        $caso->status=1;
        $caso->user_id =Auth::user()->id; 
        $caso->save();
    	return view('form',['donor'=>$caso]);
    }

        public function donor($id)
    {
        $caso=Donor::find($id);
        return view('form',['donor'=>$caso]);
    }

    public function userlist()
    {
        $users=User::all();
        return view('users',['users'=>$users]);
    }

    public function calls($id=null)
    {
        if ($id!==null) {
        $calls=Call::where('user_id',$id)->get();
        }else{
        $calls=Call::all()->sortByDesc("created_at");    
        }
        
        return view('calls',['calls'=>$calls]);
    }

        public function all_donations()
    {
        $calls=Call::where('result',2)->get();   
        return view('calls',['calls'=>$calls]);
    }


    public function userdelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()
        ->action('GeneralController@userlist');
    }    



    public function useredit($id)
    {
        $user = User::find($id);
        if($user->type==1){
            $user->type=2;
        }else{
            $user->type=1;
        }
        $user->save();
        return redirect()
        ->action('GeneralController@userlist');
    }    



    public function unresponded($id)
    {
        $donor = Donor::find($id);

        $donor->status = 1;
        $donor->user_id =Auth::user()->id; 
        $donor->save();

        Call::Create([
            'user_id'   =>Auth::user()->id,
            'donor_id'  =>$id,
            'result'    =>1,

        ]);

        return redirect()
        ->action('GeneralController@form')
        ->with('success', 'La llamada ha sido registrada');
    }   

    public function donation($id, Request $Request)
    {
        $donor = Donor::find($id);

        $donor->status = 2;
        $donor->amount = $Request->input('monto');
        $donor->user_id =Auth::user()->id; 
        $donor->save();
        
        Call::Create([
            'user_id'   =>Auth::user()->id,
            'donor_id'  =>$id,
            'result'    =>2,

        ]);


        return redirect()
        ->action('GeneralController@form')
        ->with('success', 'La donacion ha sido registrada');
    }

        public function later($id)
    {
        $donor = Donor::find($id);

        $donor->status = 3;
        $donor->user_id =Auth::user()->id; 
        $donor->save();
        Call::Create([
            'user_id'   =>Auth::user()->id,
            'donor_id'  =>$id,
            'result'    =>3,

        ]);

        return redirect()
        ->action('GeneralController@form')
        ->with('success', 'La llamada ha sido registrada');
    }

 

    public function no($id)
    {
        $donor = Donor::find($id);

        $donor->status = 4;
        $donor->user_id =Auth::user()->id; 
        $donor->save();
        Call::Create([
            'user_id'   =>Auth::user()->id,
            'donor_id'  =>$id,
            'result'    =>4,

        ]);

        return redirect()
        ->action('GeneralController@form')
        ->with('success', 'La llamada ha sido registrada');
    }
}
