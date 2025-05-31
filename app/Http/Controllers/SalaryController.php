<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    public function create()
    {
        $users=User::pluck('name', 'id');;       
       return view('salary.salary_create',compact('users'));
    }


    public function save()
    {
          $id=request('id');
          $month=request('month');
          $year=request('year');
          $salary=request('salary');
          $status=request('status');

            Salary::create([
           'id'=>$id,
           'salary'=>$salary,
           'month'=>$month,
           'year'=>$year,
           'status'=>$status
          ]);
           $users=User::pluck('name', 'id');
          return view('salary.salary_create',compact('users'));
    }
     public function index()
    {  
     $sal = DB::table('salaries')
    ->join('users', 'users.id', '=', 'salaries.id')
    ->select('salaries.*', 'users.name')
    ->get();
       return view('salary.salary_index',compact('sal'));
    }

public function edit($id)
{
   $decryptedId = decrypt($id);

    $sal = DB::table('salaries')
        ->join('users', 'users.id', '=', 'salaries.id')
        ->select('salaries.*', 'users.name')
        ->where('salaries.id', $decryptedId)
        ->first();
    $users=User::pluck('name', 'id');
    return view('salary.salary_edit', compact('sal','users'));
}

}
