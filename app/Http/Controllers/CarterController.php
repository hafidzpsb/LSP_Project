<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Carter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarterController extends Controller
{
    public function bookcarter()
    {
      $bookcarter = Car::all();
      return view('user.bookcarter', compact('bookcarter'));
    }
    public function riwayat()
    {
      $riwayat = Carter::where('user_id', auth()->user()->id)->get();
      return view('user.riwayat', compact('riwayat'));
    }
    public function sewa_create($id_mobil)
    {
        $id_carter = $id_mobil;
        return view('user.sewa_create', compact('id_carter'));
    }
    public function sewa(Request $request)
    {
        $carter_store = Carter::where('user_id', auth()->user()->id)->where('status', 'dipinjam')->get();

        if (count($carter_store) === 2) {
            return redirect('/user/bookcarter');
        }

        $validator = Validator::make($request->all(), [
            'tanggal_sewa' => 'required|date',
            'tanggal_pengembalian' => 'required|date',
        ]);

        if ($validator->fails())
        {
            return redirect('/user/bookcarter');
        }
        
        Carter::create([
            'status' => 'dipinjam',
            'user_id' => auth()->user()->id,
            'tanggal_sewa'=> $request->tanggal_sewa,
            'tanggal_pengembalian'=> $request->tanggal_pengembalian,
            'id_mobil' => $request->id_mobil,
        ]);

        $tersedia = Car::find($request->id_mobil);
        $tersedia->update([
            'tersedia' => false
        ]);

        return redirect('/user/bookcarter');
    }

    public function pengembalian(Carter $id_carter)
    {
        $id_carter->update([
            'status' => 'menunggu'
        ]);
        return redirect('/user/riwayat/index');
    }

    public function konfirmasi_pengembalian(Carter $id_carter)
    {
        $tersedia = Car::find($id_carter->car->id_mobil);
        $tersedia->update([
            'tersedia' => true,
        ]);

        $id_carter->update([
            'status' => 'dikembalikan'
        ]);
        return redirect('/admin');
    }

    public function delete($id_carter)
    {
        $data = Carter::find($id_carter);
        $data->delete();
        return redirect('/admin');
    }
}
