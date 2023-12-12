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
                'nama_mobil'=>'Toyota Kijang Innova',
                'jumlah'=> 10,
            ],[
                'nama_mobil'=>'Toyota Agya',
                'jumlah'=> 8,
            ],[
                'nama_mobil'=>'Toyota Raize',
                'jumlah'=> 6,
            ],[
                'nama_mobil'=>'Honda Brio',
                'jumlah'=> 4,
            ],[
                'nama_mobil'=>'Honda Mobilio',
                'jumlah'=> 2,
            ]
        ];
        foreach ($car as $key => $car)
        {
            Car::create($car);
        }
        $type = [
            [
                'id_mobil'=> 1,
                'kode_mobil' => 'TK-1',
                'tipe_mobil'=> 'Minivan',
                'brand_mobil'=>'Toyota',
            ],[
                'id_mobil'=> 1,
                'kode_mobil' => 'TK-2',
                'tipe_mobil'=> 'Minivan',
                'brand_mobil'=>'Toyota',
            ],[
                'id_mobil'=> 2,
                'kode_mobil' => 'TA-1',
                'tipe_mobil'=> 'Hatchback',
                'brand_mobil'=>'Toyota',
            ],[
                'id_mobil'=> 2,
                'kode_mobil' => 'TA-2',
                'tipe_mobil'=> 'Hatchback',
                'brand_mobil'=>'Toyota',
            ],[
                'id_mobil'=> 3,
                'kode_mobil' => 'TR-1',
                'tipe_mobil'=> 'SUV',
                'brand_mobil'=>'Toyota',
            ],[
                'id_mobil'=> 3,
                'kode_mobil' => 'TR-2',
                'tipe_mobil'=> 'SUV',
                'brand_mobil'=>'Toyota',
            ],[
                'id_mobil'=> 4,
                'kode_mobil' => 'HB-1',
                'tipe_mobil'=> 'Hatchback',
                'brand_mobil'=>'Honda',
            ],[
                'id_mobil'=> 5,
                'kode_mobil' => 'HM-1',
                'tipe_mobil'=> 'MPV',
                'brand_mobil'=>'Honda',
            ]
        ];
        foreach ($type as $key => $type)
        {
            Type::create($type);
        }
    }
}
