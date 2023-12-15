<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\Car;
use App\Models\Type;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Schema::dropIfExists('failed_jobs');
        Schema::dropIfExists('migrations');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('personal_access_tokens');
        $faker = \Faker\Factory::create();
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'level'=>'0',
                'password'=> bcrypt('123123123'),
            ],[
                'name'=>'User',
                'email'=>'user@user.com',
                'level'=>'1',
                'password'=> bcrypt('123123123'),
            ]
        ];
        foreach ($user as $key => $user)
        {
            User::create($user);
        }
        $car = [
            [
                'kode_mobil'=>'TK-1',
                'nama_mobil'=>'Toyota Kijang Innova',
                'harga_mobil'=> 1000000,
            ],[
                'kode_mobil'=>'TA-1',
                'nama_mobil'=>'Toyota Agya',
                'harga_mobil'=> 1000000,
            ],[
                'kode_mobil'=>'TR-1',
                'nama_mobil'=>'Toyota Raize',
                'harga_mobil'=> 1000000,
            ],[
                'kode_mobil'=>'HB-1',
                'nama_mobil'=>'Honda Brio',
                'harga_mobil'=> 1000000,
            ],[
                'kode_mobil'=>'HM-1',
                'nama_mobil'=>'Honda Mobilio',
                'harga_mobil'=> 1000000,
            ]
        ];
        foreach ($car as $key => $car)
        {
            Car::create($car);
        }
        $type = [
            [
                'nama_kategori'=> 'Minivan',
            ],[
                'nama_kategori'=>'MPV',
            ],[
                'nama_kategori'=> 'Hatchback',
            ],[
                'nama_kategori'=> 'SUV',
            ],[
                'nama_kategori'=>'Honda',
            ],[
                'nama_kategori'=> 'Toyota',
            ]
        ];
        foreach ($type as $key => $type)
        {
            Type::create($type);
        }
    }
}
