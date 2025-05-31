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
    //    return view('welcome',compact('c','name'));

   
        // $colors=['red','blue','green','yellow'];
        // return view('welcome',compact('colors'));

        // $age=30;
        // return view('welcome',compact('age'));
        
    //    $status=1;
    //     return view('welcome',compact('status'));
      
      
        // $record=['red'];

        //  return view('welcome',compact('record'));
       
        // $colors=['red','blue','green','yellow','red'];
        // return view('welcome',compact('colors'));


        // $users=User::all();   
        //  return $users;
    
        // $users=User::find(1); 
        //   return $users;

        // $users=User::where('id','=',1)->first();
        // return $users->name;

        // $users=User::where('id','=',1)->get();
        // return $users[0]->name;


        //   $users=User::where('name','=','Richmond Bernier')->first();
           
        // $users=User::whereIn('id',[1,2])->get();
        //     return $users;

             $users=User::where('status',1)->get();
            return $users;
            


             //   return $users->name;
            //  return view('welcome',compact('users'));
            //     $users=User::withTrashed()->latest()->paginate(6);
    //    session()->forget('user_name');
    //    session()->flush();
        
        // return view('index',compact('users'));
             // session()->put('user_name','Gana');
        // session()->put('user_id','43');


    }
    public function index()

    { 
        $users=User::all();
    //        session()->put('user_name','Gana');
    //     session()->put('user_id','43');
        
        $users=User::withTrashed()->latest()->paginate(6);
       session()->forget('user_name');
       session()->flush();
        return view('index',compact('users'));
        // return session()->get('user_name');
        // return view('index');
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
          return view('users.create');

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

        return redirect()->route('login')->with('message','User Created Sucessfully');
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
