<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
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
    // return $fileName;
    request('image')->storeAs('images',$fileName);
    $input['image']=$fileName;
    File::create([
           'file_name'=>$fileName,
          
          ]);

}

      
    }
}
