<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'id_user' => 1,
            'username'=>'Admin',
            'email'=>'admin@gmail.com',
            'isAdmin'=>true,
            'password'=> bcrypt('admin'),
        ]);
        Profile::create([
            'id_user'=> 1,
            'nama_depan'=>'John',
            'nama_belakang'=>'Doe',
            'jenis_kelamin'=>'Pria',
            'tanggal_lahir'=>null,
            'alamat'=>'Bandung',
        ]);
    }
}
