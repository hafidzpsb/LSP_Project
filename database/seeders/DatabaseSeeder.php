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
                'phone'=>'08123123123',
                'level'=>'0',
                'password'=> bcrypt('123123123'),
            ],[
                'name'=>'User',
                'email'=>'user@user.com',
                'phone'=>'08321321321',
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
                'nama_mobil'=>'Toyota Kijang Innova',
                'type'=>'mpv',
                'use_for'=>'Carter',
                'jumlah'=> 10,
            ],[
                'nama_mobil'=>'Toyota Agya',
                'type'=>'van',
                'type'=>'travel',
                'jumlah'=> 8,
            ]
        ];
        foreach ($car as $key => $car)
        {
            Car::create($car);
        }

    }
}
