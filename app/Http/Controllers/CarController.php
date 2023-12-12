<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_mobil' => 'required|string',
            'jumlah' => 'required|integer',
        ]);
        $car_store = Car::create($request->all());
        return $car_store;
    }
    public function update(Request $request, $id_mobil)
    {
        $car_update = Car::find($id_mobil);
        $car_update -> update($request->all());
        return $car_update;
    }
    public function delete(Request $request, $id_mobil)
    {
        $car_delete = Car::find($id_mobil);
        $car_delete -> delete();
        return 200;
    }
}
