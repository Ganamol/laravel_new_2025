<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//       User::Create([
// 'name'=>'gana',
// 'dob'=>'2000-5-2',

//       ]);
//       User::Create([
//         'name'=>'manu',
//         'dob'=>'2000-5-21',
        
//               ]);
//               User::Create([
//                 'name'=>'bharee',
//                 'dob'=>'1988-5-2',
                
//                       ]);
User::factory()->count(100)->create();
    }
}
