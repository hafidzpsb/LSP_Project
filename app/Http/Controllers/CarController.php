<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function index()
    {
        $car_index = Car::all();
        return view('admin.index', compact('car_index'));
    }

    public function addcar(Request $request) {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'nama_mobil' => 'required|string',
            'type' => 'required|string',
            'checkbox_values' => 'required|array',
            'jumlah' => 'required|integer',
        ]);

        $car = new Car();
        $car->nama_mobil = $request->input('nama_mobil');
        $car->type = $request->input('type');
        $car->use_for = implode(',', $request->input('checkbox_values'));
        $car->jumlah = $request->input('jumlah');

        $car->save();
        return redirect('/admin');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_mobil' => 'required|string',
            'type' => 'required|string',
            'use_for' => 'required|string',
            'jumlah' => 'required|integer',
        ]);
        if ($validator->fails())
        {
            return redirect('/admin/car');
        }
        $car_store = Car::create($request->all());
        return redirect('/admin/car');
    }
    public function edit($id_mobil)
    {
        $car_edit = Car::find($id_mobil);
        return view('admin.car_edit',  compact('car_edit'));
    }
    public function update(Request $request, $id_mobil)
    {
        $car_update = Car::find($id_mobil);
        if($car_update)
        {
            $validator = Validator::make($request->all(), [
                'nama_mobil' => 'required|string',
                'jumlah' => 'required|integer',
            ]);
            if ($validator->fails())
            {
                return redirect('/admin/car');
            }
            $car_update -> update($request->all());
        }
        return redirect('/admin/car');
    }
    public function delete($id)
    {
        $data =Car::find($id);
        $data->delete();
        return redirect('/admin');
    }
}
