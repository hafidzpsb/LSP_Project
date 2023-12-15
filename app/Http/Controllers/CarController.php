<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function index()
    {
        $car_index = Car::with('type')->get();
        return view('admin.car_index', compact('car_index'));
    }
    public function create()
    {
        $car_create = Type::all();
        return view('admin.car_create', compact('car_create'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_mobil' => 'required|string',
            'nama_mobil' => 'required|string',
            'harga_mobil' => 'required|string',
        ]);
        if ($validator->fails())
        {
            return redirect('/admin');
        }
        $data = $request->all();
        $foto = fake()->uuid() . '.' . $data['foto']->extension();
        $request->file('foto')->move(public_path('/img/cars'), $foto);
        $data['foto'] = "/img/cars/$foto";

        $car_store = Car::create($data);

        $kategori = $request->input('kategori_mobil');
        $car_store->type()->attach($kategori);

        return redirect('/admin');
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
            $car_update -> update($request->all());
        }
        return redirect('/admin/car');
    }
    public function delete($id_mobil)
    {
        $data = Car::find($id_mobil);
        $data->delete();
        return redirect('/admin');
    }
}
