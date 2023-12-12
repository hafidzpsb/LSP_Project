<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    public function index()
    {
        $type_index = Type::all();
        return view('admin.type_index', compact('type_index'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tipe_mobil' => 'required|string',
            'brand_mobil' => 'required|string',
        ]);
        $type_store = Type::create($request->all());
        return $type_store;
    }
    public function update(Request $request, $id_kategori)
    {
        $type_update = Type::find($id_kategori);
        $type_update -> update($request->all());
        return $type_update;
    }
    public function delete(Request $request, $id_kategori)
    {
        $type_delete = Type::find($id_kategori);
        $type_delete -> delete();
        return 200;
    }
}
