<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Configuration\File as ConfigurationFile;

class FileController extends Controller
{

  
    public function index()
    {   $users=File::all();
        // return $users;
        return view('Files.index',compact('users'));
    }
    public function create()
    {
        return view('Files.create');
    }
    public function store(Request $request)
    {
      if(request()->hasFile('image'))
    {
    $extension=request('image')->extension();
    $fileName='user_pic'.time().'.'.$extension;

    request('image')->storeAs('images',$fileName,'public');
    $input['image']=$fileName;
    File::create([
           'file_name'=>$fileName,
          
          ]);
            return back()->with('success', 'Image uploaded successfully!');
     }

    }
     public function edit($id)
{
   $user=File::find(decrypt($id));
    // $user=User::find(decrypt($userId));
    return view('Files.edit',compact('user'));
}
// public function update(Request $request)
//     {
//          $Fid=decrypt(request('f_id'));
//             $user=File::find($Fid);
//       if(request()->hasFile('image'))
//     {
//     $extension=request('image')->extension();
//     $fileName='user_pic'.time().'.'.$extension;
//     request('image')->storeAs('images',$fileName,'public');
//     $input['image']=$fileName;
//     $user->update([
//            'file_name'=>$fileName,
//            ]);
//             return back()->with('success', 'Image uploaded successfully!');
//      }


      
 
//     }
public function update(Request $request)
{
   $Fid=request('f_id');// safer and clearer
    $user = File::find($Fid);

    if (!$user) {
        return back()->with('error', 'User not found.');
    }

    // Validate image input
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048' // optional: adjust size & mime types
    ]);

    if ($request->hasFile('image')) {
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileName = 'user_pic_' . time() . '.' . $extension;

        // Save file in storage/app/public/images/
        $request->file('image')->storeAs('images', $fileName, 'public');

        // Update file_name in DB
        $user->update([
            'file_name' => $fileName,
        ]);

        return back()->with('success', 'Image uploaded successfully!');
    }

    return back()->with('error', 'No image uploaded.');
}

    
}
