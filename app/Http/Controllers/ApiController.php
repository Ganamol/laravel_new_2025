<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController{

  public function getProfile()
  {
    $userid=request('user_id');
    $user=User::find($userid);
    return response()->json([
        'status'=>200,
        'data'=>[
            'email'=>$user,

        ],
        
        'message'=>''
    ]);
  }
}
