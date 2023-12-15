<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\Car;
use App\Models\Type;
use App\Models\Carter;
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
                'kode_mobil'=>'TK-1',
                'nama_mobil'=>'Toyota Kijang Innova',
                'foto'=>'/img/cars/test.jpg',
                'harga_mobil'=> 500000,
            ],[
                'kode_mobil'=>'TA-1',
                'nama_mobil'=>'Toyota Agya',
                'foto'=>'/img/cars/test2.jpg',
                'harga_mobil'=> 450000,
            ],[
                'kode_mobil'=>'TR-1',
                'nama_mobil'=>'Toyota Raize',
                'foto'=>'/img/cars/test3.jpg',
                'harga_mobil'=> 400000,
            ],[
                'kode_mobil'=>'HB-1',
                'nama_mobil'=>'Honda Brio',
                'foto'=>'/img/cars/test4.jpg',
                'harga_mobil'=> 350000,
            ],[
                'kode_mobil'=>'HM-1',
                'nama_mobil'=>'Honda Mobilio',
                'foto'=>'/img/cars/test5.jpg',
                'harga_mobil'=> 300000,
            ]
        ];
        foreach ($car as $key => $car)
        {
            Car::create($car);
        }
        $type = [
            [
                'nama_kategori'=>'Minivan',
            ],[
                'nama_kategori'=>'MPV',
            ],[
                'nama_kategori'=>'Hatchback',
            ],[
                'nama_kategori'=>'SUV',
            ],[
                'nama_kategori'=>'Honda',
            ],[
                'nama_kategori'=>'Toyota',
            ]
        ];
        foreach ($type as $key => $type)
        {
            Type::create($type);
        }
        Carter::create([
            'id_mobil' => 1,
            'user_id' => 2,
            'status' => 'dipinjam',
            'tanggal_sewa' => Carbon::createFromDate(2023, 12, 10),
            'tanggal_pengembalian' => Carbon::createFromDate(2023, 12, 15),
        ]);
    }
}
