<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    
    public function home()
    {
        return view('home');
    }

    public function work()
    {   
        $repeat=0;
        $users = [
            'ana'=>'', 
            'pedro'=>'', 
            'felipe' => ''
        ];
        $userReturn=array();
        foreach ($users as  $key=> $user) {
            
                $users[$key]= App\Activity::where('nameUser', $key)->where('created_at', '>',date("Y-m-d 00:00:00"))->sum('cost');
        }
        foreach ($users as $key => $value) {
            $money = min($users);
            if( $money == $value){
                
                array_push($userReturn, $key);
            }
        } 
        
        if (count($userReturn) >= 2) {
            $index= array_rand($userReturn, 1);
            $name=$userReturn[$index];
            // dd($name);
        }else{
            $name=$userReturn[0];  
        }
       
        
        return view('work', compact(['name', 'money']));
    }
    public function inform( string $name = 'general')
    {
        if ($name === 'general') {
        //    return  $activity = App\Activity::with(['id', 'name', 'cost', 'created_at'])->paginate(10);
             $activity = App\Activity::paginate(10);
        }else{
            $activity = App\Activity::where('nameUser', $name)->paginate(10);
        }
        return view('inform', compact(['name', 'activity']));
    }

    public function message(Request $request)
    {
        $this->validate( $request, [
            'name' => 'required',
            'email' => 'required | email',
            'message' => 'required | min:5'
        ]);
        return $request->all();
       
    }

    public function asingActivity(Request $request)
    {
        $this->validate( $request, [
            'name' => 'required',
            'email' => 'required | email',
            'message' => 'required | min:5'
        ]);
        return $request->all();
    }

    public function informConsult($user = 'general')
    {
        
    }

    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'cost'=>['integer','required'],
            'nameUser'=>'required',

        ]);
        $newActivity = new App\Activity;
        $newActivity->name = $request->name;
        $newActivity->cost = $request->cost;
        $newActivity->nameUser = $request->nameUser;
        $newActivity->save();
        return back()->with('message','Actividad asignada');
    }


    public function newUser( )
    {
        return "nuevo usuario";
    }
    
}
