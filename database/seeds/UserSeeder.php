<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Masyarakat;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
        'name'=> 'dita',
        'username' => 'rakyat',
        'password' => bcrypt('123qwe123'),
        'level'=> 'masyarakat',
    ]);


       Masyarakat:: create([
        'nik'=>'1234567890987654',
        'nama'=>$user->name,
        'username'=>$user->name,
        'password'=> bcrypt ($user->password),
        'telp'=>'0813242',
        'user_id'=> $user->id,
    ]);
    }
}
