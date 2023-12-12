<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    public function index()
    {
        $type_index = Type::with('car')->get();
        return view('admin.type_index', compact('type_index'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_mobil' => 'required|integer',
            'kode_mobil' => 'required|string',
            'tipe_mobil' => 'required|string',
            'brand_mobil' => 'required|string',
        ]);
        if ($validator->fails())
        {
            return redirect('/admin/type');
        }
        $type_store = Type::create($request->all());
        return redirect('/admin/type');
    }
    public function edit($id_kategori)
    {
        $type_edit = Type::find($id_kategori);
        return view('admin.type_edit',  compact('type_edit'));
    }
    public function update(Request $request, $id_kategori)
    {
        $type_update = Type::find($id_kategori);
        if($type_update)
        {
            $validator = Validator::make($request->all(), [
                'id_mobil' => 'required|integer',
                'kode_mobil' => 'required|string',
                'tipe_mobil' => 'required|string',
                'brand_mobil' => 'required|string',
            ]);
            if ($validator->fails())
            {
                return redirect('/admin/type');
            }
            $type_update -> update($request->all());
        }
        return redirect('/admin/type');
    }
    public function delete($id_kategori)
    {
        $type_delete = Type::find($id_kategori);
        if($type_delete)
        {
            $type_delete -> delete();   
        }
        return redirect('/admin/type');
    }
}
