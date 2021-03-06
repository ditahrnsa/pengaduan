<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Petugas;
class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Jhon Doe',
        	'username' => 'admin',
        	'password' => bcrypt('mintip'),
        	'level' => 'petugas'
        ]);

        Petugas::create([
            'nama_petugas' => $user->name,
            'username' => $user->username,
            'password' => bcrypt($user->password),
            'level' => 'admin',
            'telp' => '0812861291',
            'user_id' => $user->id 
        ]);

        $user_2 = User::create([
            'name' => 'Jhon Doe',
            'username' => 'petugas',
            'password' => bcrypt('okesip'),
            'level' => 'petugas'
        ]);

        Petugas::create([
            'nama_petugas' => $user_2->name,
            'username' => $user_2->username,
            'password' => bcrypt($user_2->password),
            'level' => 'petugas',
            'telp' => '081286291',
            'user_id' => $user_2->id 
        ]);
    }
}
