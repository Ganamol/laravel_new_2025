<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()

    {
        // $a=10;
        // $b=20;
        // $c=$a+$b;
        // $name="Gana";
        // $colors=['red','blue','green','yellow'];
        // return view('welcome',compact('name','c','colors'));

        // $age=30;
        // return view('welcome',compact('age'));
        // $record=['red'];

        //  return view('welcome',compact('record'));
        // $status=1;
        // return view('welcome',compact('status'));
        // $colors=['red','blue','green','yellow','red'];
        // return view('welcome',compact('colors'));

        $users=User::all();
        // $users=User::find(1);
        // $users=User::where('id','=',5)->get();
        //   $users=User::where('id','=',5)->first();
          //   $users=User::where('name','=','Richmond Bernier')->first();
            //  $users=User::whereIn('id',[43,23])->get();
            //  $users=User::where('status',1)->get();
            
            
             //   return $users->name;

        return view('welcome',compact('users'));


    }

    public function create()
    {
        return view('users.create');
    }
    public function save()
    {
          $name=request('name');
          $dob=request('dob');
          $status=request('status');

User::create([
    'name'=>$name,
    'dob'=>$dob,
    'status'=>$status
]);
        return "form submit";
        // return view('save.create');
    }
}

