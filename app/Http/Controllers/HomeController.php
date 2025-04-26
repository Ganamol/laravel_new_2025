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

        // $users=User::all();

        session()->put('user_name','Gana');
        session()->put('user_id','43');
        
        $users=User::withTrashed()->latest()->paginate(6);
       session()->forget('user_name');
       session()->flush();
        
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
        // return session()->get('user_name');
        return view('users.create');
    }
    public function save()
    {
          $name=request('name');
          $email=request('email');
          $password=request('password');
          $dob=request('dob');
          $status=request('status');

            User::create([
           'name'=>$name,
           'email'=>$email,
           'password'=>$password,
           'dob'=>$dob,
           'status'=>$status
          ]);

    //   $user=User::firstOrCreate([
    //         'email'=>request('email')
    //     ],[
    //         'name'=>request('name'),
    //         'dob'=>request('dob'),
    //         'status'=>request('status'),
    
    //     ]);
    //     return $user;


        // $user=User::updateOrCreate([
        //     'email'=>request('email')
        // ],[
        //     'name'=>request('name'),
        //     'dob'=request('dob'),
        //     'status'=>request('status'),
    
        // ]);
        // return $user;









        return redirect()->route('home')->with('message','User Created Sucessfully');
        // return view('save.create');
    }

    public function delete($userId)
{
User::find(decrypt($userId))->delete();

return redirect()->route('home')
->with('message','User Deleted Successfully');
}


public function edit($userId)
{
   $user= User::find(decrypt($userId));
    // $user=User::find(decrypt($userId));
    return view('users.edit',compact('user'));
}
public function update()
{
   
    $userId=decrypt(request('id'));
    $user= User::find($userId);
    $user->update([
        'name'=>request('name'),
           'dob'=>request('dob'),
           'email'=>request('email'),
           'password'=>request('password'),
           'status'=>request('status')
    ]);
      return redirect()->route('home')
      ->with('message','update successfully');
}
}
